<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Menu;
use Auth;

class FrontendController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return redirect('/login');
        }

        $menus =  Menu::filter()->get();
        if(request('page')){
            $pageDetails =  Page::filter()->where('name',request('page'))->first();
        }else{
            $pageDetails =  Page::filter()->orderBy('id','ASC')->first();
        }

        return view('frontend.main',compact('menus','pageDetails'));
    }
}
