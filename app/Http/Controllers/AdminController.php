<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }

    public function create()
    {
        return view('Admin.admin');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|max:100',
        ]);

        // Simpan data ke database (contoh)
        // Admin::create($validated);

        return redirect()->back()->with('success', 'Admin created successfully!');
    }
}