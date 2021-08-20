<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ContactShow;
use App\Http\Livewire\ContactCreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/contact', ContactCreate::class)->name('contact.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', ContactShow::class)->name('dashboard');
