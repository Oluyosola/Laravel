<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{
 public function insert() {
       Post::make(array(
        'title' => 'Laravel',
        'body'  => 'this is laravel',
    ));
}
public function retrieve(){
   echo  $select = Post::find(2);
}
public function getDetails(){
    echo $theName= Post::where('title', '=', 'laravel')->first();
}
public function doUpdate(){
    $change = Post::where('title', '=', 'you are welcome')->first();
    $change->title = 'Eloquent';
    $change->save();

}
public function del(){
     $dele = Post::find(13);
    $dele->delete();
}
}

