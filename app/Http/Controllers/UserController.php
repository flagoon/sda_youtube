<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $users = Role::with('users')->where('name', 'normal_user')->get();
        return view('users.show', [
            'users' => $users
        ]);
    }

    public function delete(int $id)
    {
        User::where('id', $id)->delete();
        return redirect('showUsers');
    }
}
