<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Users;
use App\Models\Role;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Hash;

class UserController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Users();
    }
    public function create()
    {
        $roles = Role::get();
        return view("admin.users.create", compact("roles"));
    }

    function list()
    {
        $sort = request("sort") ? request("sort") : "DESC";
        $data = Users::orderBy("id", $sort)->get();
        return view("admin.users.list", compact("data"));
    }

    public function edit($id)
    {
        $roles = Role::get();
        $data = Users::where("id", $id)->first();
        return view("admin.users.edit", compact("data", "roles"));
    }
    

    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                "name" => $request->name,
                "username" => $request->username,
                "email" => $request->email,
                "role_id" => $request->role_id
            ];
            if($request->password){
                $data["password"] = Hash::make($request->password);
            }
            if ($request->has("id")) {
                Users::where("id", $request->id)->update($data);
                $text = "updated";
            } else {
                Users::insert($data);
                $text = "created";
            }
            DB::commit();
            return redirect()
                ->back()
                ->with("success", "users has been " . $text . " successfully");
        } catch (\Exception $e) {
            DB::rollback();
            Log::error("Users -> store : " . $e->getMessage());
            return redirect()
                ->back()
                ->with("error", serverError());
        }
    }

    public function delete($id)
    {
        Users::find($id)->delete();
        return redirect()
            ->back()
            ->with("success", "Data Deleted Successfully");
    }
}
