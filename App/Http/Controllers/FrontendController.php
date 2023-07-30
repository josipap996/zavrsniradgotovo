<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class FrontendController extends Controller
{
    public function index(){
        $pages =  Page::get();
        if(request('page')){
            $pageDetails =  Page::where('name',request('page'))->first();
        }else{
            $pageDetails =  Page::orderBy('id','ASC')->first();
        }

        return view('frontend.main',compact('pages','pageDetails'));
    }
}
