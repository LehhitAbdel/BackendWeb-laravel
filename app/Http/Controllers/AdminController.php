<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function showUsers()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

public function makeAdmin(User $user)
{
    $user->is_admin = true;
    $user->save();

    return redirect()->back()->with('success', 'User has been made admin');
}


}
