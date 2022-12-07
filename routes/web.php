<?php

use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

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

// Remove Filament Admin Login Page
Route::redirect('/admin/login', '/login');

Route::view('/', 'home')->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    // Redirect User After Login
    Route::get('/redirectAuthenticatedUsers', [RedirectAuthenticatedUsersController::class, 'home']);
    Route::resource('product', UserProductController::class)->only(['create', 'store']);
    Route::get('feedback/{product}', [FeedbackController::class, 'create'])->name('feedback');
    Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');
});

Route::resource('product', UserProductController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
