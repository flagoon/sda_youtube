<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = Role::with('users')->where('name', 'normal_user')->get();
//        return $users;
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
