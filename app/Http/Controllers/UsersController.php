<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //创建账户
    public function create()
    {
        return view('users.create');
    }

    //展示
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //保存注册用户
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }


}
