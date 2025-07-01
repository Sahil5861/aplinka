<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //




    public function contactus(){
        return view('frontend.contactus');
    }

    public function services($slug){
        $page = 'frontend.services.'.$slug;
        return view($page, compact('slug'));
    }
}
