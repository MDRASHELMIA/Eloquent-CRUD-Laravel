<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'show'])->name('home');
Route::get('/view', [HomeController::class,'view'])->name('view');

Route::get('/delete-post/{id}', [HomeController::class,'deletePost'])->name('delete');
Route::get('/single/view/{id}', [HomeController::class,'SingleView'])->name('single');

Route::get('/form',[HomeController::class,'formShow'])->name('form');
Route::post('/form/inset',[HomeController::class,'InsertedItem'])->name('inserted');

Route::get('/edit/post/{id}',[HomeController::class,'EditShowPost']);
Route::post('/update/succesfully',[HomeController::class,'UpdateItem'])->name('Update.item');

Route::get('/employee/pdf', [HomeController::class, 'createPDF']);
