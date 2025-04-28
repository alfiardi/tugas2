<?php

use App\Http\Controllers\UserController; // Perbaikan namespace dan nama kelas

// Route untuk menampilkan form create
Route::get('user/create', [UserController::class, 'create'])->name('user.create');

// Route untuk menyimpan data (menggunakan metode POST)
Route::post('user/store', [UserController::class, 'store'])->name('user.store');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form div {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        form p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #666;
        }

        form a {
            color: #007bff;
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        <h2>User Registration</h2>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">Submit</button>
        <p>Already have an account? <a href="/login">Login here</a></p>
    </form>
</body>
</html>
