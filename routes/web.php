<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostFormController;
use App\Http\Controllers\TrackersController;
use App\Http\Controllers\GuestLoginController;

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

// ゲストログイン用
Route::get('/guest-login', [GuestLoginController::class, 'login'])->name('guest.login');

// リソースコントローラー
Route::middleware('auth')->group(function () {
    Route::resource('posts', PostFormController::class);
    Route::resource('trackers', TrackersController::class);

    // サーバーエラーのテスト
    Route::get('/server-error', function () { abort(500); });
    // 未定義のルートは 404
    Route::fallback(function () { abort(404); });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
