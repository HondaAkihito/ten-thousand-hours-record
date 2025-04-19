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

// エラー画面の確認テスト
// 400 Bad Request
Route::get('/force-400', function () { abort(400, 'Bad Request Test'); });
// 401 Unauthorized
Route::get('/force-401', function () { abort(401, 'Unauthorized Test'); });
// 403 Forbidden
Route::get('/force-403', function () { abort(403, 'Forbidden Test'); });
// 404 Not Found
Route::get('/force-404', function () { abort(404, 'Not Found Test'); });
// 419 Page Expired
Route::get('/force-419', function () { abort(419, 'Page Expired Test'); });
// 422 Unprocessable Entity
Route::get('/force-422', function () { abort(422, 'Unprocessable Entity Test'); });
// 429 Too Many Requests
Route::get('/force-429', function () { abort(429, 'Too Many Requests Test'); });
// 500 Internal Server Error（throwで例外を発生させる）
Route::get('/force-500', function () { throw new \Exception('Internal Server Error Test'); });
// 503 Service Unavailable
Route::get('/force-503', function () { abort(503, 'Service Unavailable Test'); });

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
