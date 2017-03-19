<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles.perms')->get();

        return view('user/index', [
            "users" => $users
        ]);
    }

    public function show($id)
    {
        $user  = User::with('roles')->findOrFail($id);
        $roles = Role::all();

        return view('user/edit', [
            'user'  => $user,
            'roles' => $roles
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = user::findOrFail($id);

        $roles = $request->get('roles') ?? [];

        $user->roles()->sync($roles);

        return redirect()->route('users.show', ['id' => $id]);
    }
}
