<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $posts = Posts::all();
        $users = User::all();
        return view('admin.index',compact('posts','users'));
    }
    public function post_show(){
        $posts = Posts::paginate(10);
        return view('admin.posts.index',compact('posts'));
    }
    public function create_post(){
        return view('admin.posts.create');
    }
    public function posts_store(PostRequest $request)
    {
        $data = request()->all(['title', 'content']);
        $post = Posts::create($data);
        return redirect()->route('admin.post_show');
    }
    public function posts_edit($id)
    {
        $post = Posts::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }
    public function post_update(PostRequest $request, $id)
    {
        $post = Posts::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('admin.post_show');
    }
    public function post_destroy($id){
        $posts = Posts::findOrFail($id);
        $posts->delete();
    }
    public function users_index(){
        $users = User::paginate(10);
        return view('admin.users.index',['users'=>$users]);
    }
    public function create_user(){
        return view('admin.users.create');
    }
    public function users_store(UserRequest $data)
    {

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'dob' =>$data['dob'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('admin.users_index');
    }
    public function edit_user($id){
        $users= User::findOrFail($id);
        return view('admin.users.edit',compact('users'));
    }
    public function users_destroy($id){
        $users = User::findOrFail($id);
        $users->delete();
    }
}
