<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MessageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/admin/dishes', [DishController::class, 'index'])->name('dishes.index');
Route::get('/admin/dishes/create', [DishController::class, 'create'])->name('dishes.create');
Route::post('/admin/dishes', [DishController::class, 'store'])->name('dishes.store');
Route::get('/admin/dishes/{dish}/edit', [DishController::class, 'edit'])->name('dishes.edit');
Route::put('/admin/dishes/{dish}', [DishController::class, 'update'])->name('dishes.update');
Route::delete('/admin/dishes/{dish}', [DishController::class, 'destroy'])->name('dishes.destroy');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
Route::get('/admin/messages', [MessageController::class, 'index'])->name('messages.index');