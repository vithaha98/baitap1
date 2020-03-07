<?php

namespace App\Http\Controllers;

use App\Models\Posts;


class Postcontroller extends Controller
{
    //
    public function index(){
        $posts = Posts::all();
        return view('posts.index',['posts'=>$posts]);
    }
    public function show($id){
        $posts = Posts::findorfail($id);
        return view('posts.show',['posts'=>$posts]);
    }
}
