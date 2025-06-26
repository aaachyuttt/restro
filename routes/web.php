<?php

use App\Livewire\CartPage;
use App\Livewire\HomePage;
use App\Livewire\MenuPage;
use App\Livewire\PageViewer;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomePage::class)->name('home');
Route::get('/menu', MenuPage::class)->name('menu');
Route::get('/cart', CartPage::class)->name('cart');
Route::get('/{slug}', PageViewer::class)->name('page');
