<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('User.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|max:100',
        ]);

        // Simpan ke database jika ada model User
        // User::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim');
    }
}