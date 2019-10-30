<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class UserController extends Controller
{
    public function index()
    {
      $Post =  Post::where('user_id', auth()->user()->id)->get();
      return view('/Post/mypost')->with('Post', $Post);
    }

}
