<?php

use App\Livewire\Auth\ForgetPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\CartPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MenuPage;
use App\Livewire\MyOrdersDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\PageViewer;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomePage::class)->name('home');
Route::get('/menu', MenuPage::class)->name('menu');
Route::get('/cart', CartPage::class)->name('cart');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forget-password', ForgetPassword::class)->name('forget-password');
Route::get('/reset-password', ResetPassword::class)->name('reset-password');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/forget-password', ForgetPassword::class)->name('forget-password');
    Route::get('/reset-password', ResetPassword::class)->name('reset-password');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('home');
    })->name('logout');
    Route::get('/checkout', CheckoutPage::class)->name('checkout');
    Route::get('/my-orders', MyOrdersPage::class)->name('my-orders');
    Route::get('my-order-details', MyOrdersDetailPage::class)->name('my-orders-detail');
});
Route::get('/{slug}', PageViewer::class)->name('page');
