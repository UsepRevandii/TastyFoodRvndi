<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/berita', [PageController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| ADMIN AUTH
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware('guest')
    ->name('admin.')
    ->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function () {

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // DASHBOARD
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // COMPANY / LOCATION SETTINGS (INI YANG DIPAKAI)
        Route::post(
            '/settings/location',
            [DashboardController::class, 'updateLocation']
        )->name('company.update');

        // CRUD
        Route::resource('news', NewsController::class);
        Route::resource('galleries', GalleryController::class);

        // CONTACT
        Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
        Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });
