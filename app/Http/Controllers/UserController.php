<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('users.index',compact('users',$users));
    }
    public function edit($id){
        $users = User::findorfail($id);
        if (\Auth::user()->is_admin === config('common.role.admin') || \Auth::user()->id === $users->id  ){
            Storage::url($users->avatar);
            return view('users.edit',compact('users',$users));
        }
        return redirect()->route('users');

    }
    public function update(UserRequest $request, $id){
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->dob = $request->input('dob');
        $users->avatar = $request->file('select_file')->store('images', 'public');
        $users->save();
        return redirect()->route('users');
    }


}
