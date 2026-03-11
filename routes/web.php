<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/level', [LevelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.simpan');

Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');

Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');