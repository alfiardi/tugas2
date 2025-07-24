<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

// Route halaman utama
Route::get('/', function () {
    return view('home');
});

// Form create
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');

// Store data
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::post('admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

// User routes
Route::get('users', [UserController::class, 'index'])->name('users.index');

// Home
Route::get('home', function () {
    return view('home');
})->name('home');

// Products resource routes
Route::resource('products', ProductController::class);