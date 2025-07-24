<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Menampilkan daftar pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data dari tabel 'users'
        $allUsers = DB::table('users')->get();

        // Mengambil satu baris data pertama dari tabel 'users'
        $firstUser = DB::table('users')->first();

        // Mengambil semua data dari kolom 'name'
        $userNames = DB::table('users')->pluck('name');

        // Menghitung jumlah total pengguna
        $userCount = DB::table('users')->count();

        // Mengambil semua pengguna dan mengurutkannya berdasarkan nama
        $orderedUsers = DB::table('users')->orderBy('name')->get();

        // Mengambil 2 pengguna pertama
        $limitedUsers = DB::table('users')->limit(2)->get();

        // Mengirimkan semua variabel ke view 'user.index'
        return view('User.index', compact(
            'allUsers',
            'firstUser',
            'userNames',
            'userCount',
            'orderedUsers',
            'limitedUsers'
        ));
    }

    /**
     * Menampilkan form untuk membuat user baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Menyimpan user baru ke database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:100',
        ]);

        // Simpan ke database jika ada model User
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);

        return redirect()->back()->with('success', 'User berhasil didaftarkan!');
    }
}
