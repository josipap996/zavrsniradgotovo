<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;
use Auth;
use Session;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                Auth::login($user);
                if($user->role_id == 1){
                    $access_items = [];
                }else{
                    $role = Role::where('id',$user->role_id)->first();
                    $access_items = $role->access?explode(', ',$role->access):[];
                    foreach ($access_items as $item) {
                        // Check if the current item contains '.create'
                        if (strpos($item, '.create') !== false || strpos($item, '.edit') !== false) {
                            // Replace '.create' with '.store'
                            $newItem = str_replace('.create', '.store', $item);

                            // Add the new item to the array
                            $access_items[] = $newItem;
                        }
                    }

                    $access_items[]='dashboard';
                }
                

                User::where('id',$user->id)->update(['last_login'=>Carbon::now()]);
                
                Session::put('access',$access_items);

                toastr()->addSuccess('You are logged in successfully');
                return redirect()->route('dashboard');
            }else{
                toastr()->addError('Invalid email or password');
                return redirect()->back();
            }
        }else{
            toastr()->addError('Invalid email or password');
            return redirect()->back();
        }
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
