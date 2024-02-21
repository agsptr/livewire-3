<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//post index
Route::get('/', App\Livewire\Posts\Index::class)->name('posts.index');

//post index
Route::get('create', App\Livewire\Posts\Create::class)->name('posts.create');

//post edit
Route::get('edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');