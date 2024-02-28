<?php
use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/authors', [AuthorController::class, 'index']);
Route::get('/admin/authors/create', [AuthorController::class, 'create']);
Route::post('/admin/authors', [AuthorController::class, 'store']);