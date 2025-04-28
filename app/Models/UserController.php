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
            'email' => 'required|email|unique:users,email', // Perbaikan pada nama tabel
            'password' => 'required|string|max:100',
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim');
    }
}