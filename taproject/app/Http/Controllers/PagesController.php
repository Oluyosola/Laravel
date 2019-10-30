<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index (){
        $title = 'welcome to laravel learning';
        return view ('pages.index', compact('title'));
    }
    public function about (){
        $pass = 'this is all about us';
        // $same= 'this about page i mean';
        return view ('pages.about')->with('pass',$pass);
    }
    public function services (){
        $data = array(
            'new'=> 'our services', 'old'=>'the old things',
            'yes'=>['web development', 'integrations', 'andriod development']

    );
        return view ('pages.services')->with($data);
    }
    
}
