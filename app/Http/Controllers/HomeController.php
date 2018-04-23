<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('users.adminHome');
    }

    public function userHome(Request $request)
    {
        $request->user()->authorizeRoles('normal_user');
        return view('users.userHome');
    }
}
