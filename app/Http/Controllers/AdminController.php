<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



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

public function createUserForm()
{
    return view('admin.create-user');
}

public function storeUser(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'birthday' => 'nullable|date',
        'about_me' => 'nullable|string',
        'is_admin' => 'sometimes|accepted',
    ]);

    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'birthday' => $validatedData['birthday'] ?? null,
        'about_me' => $validatedData['about_me'] ?? null,
        'is_admin' => isset($validatedData['is_admin']),
    ]);

    return redirect()->route('admin.users')->with('success', 'User created successfully.');
}



}
