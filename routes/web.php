<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Posts;
use App\Livewire\Pages\ViewPost;
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

Route::get('/', About::class)->name('about');
Route::get('/posts', Posts::class)->name('posts');
Route::get('/posts/{slug}', ViewPost::class)->name('view-post');
