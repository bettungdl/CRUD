<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.users');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Usuario eliminado correctamente.');
    }

    public function show($id)
    {
        return view('admin.users.show', ['id' => $id]);
    }

    public function edit($id = null)
    {
        return view('admin.users.edit', ['id' => $id ?? null]);
    }

    public function create()
    {
        return view('admin.users.edit');
    }
}