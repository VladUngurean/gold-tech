<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'password' => 'required'
//        ]);
    }

    public function login()
    {
        return view('user.login');
    }
}
