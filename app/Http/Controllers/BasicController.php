<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function test()
    {
        return view('test');
    }
    public function add()
    {
        return view('add-new');
    }
}
