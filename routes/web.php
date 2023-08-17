<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

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

Route::get('400', function () {
    \Log::error('400エラーのテスト');
    abort(400); //500のHTTPステータスコードを返す指定
});
Route::get('401', function () {
    \Log::error('401エラーのテスト');
    abort(401); //500のHTTPステータスコードを返す指定
});
Route::get('403', function () {
    \Log::error('403エラーのテスト');
    abort(403); //500のHTTPステータスコードを返す指定
});
Route::get('404', function () {
    \Log::error('404エラーのテスト');
    abort(404); //500のHTTPステータスコードを返す指定
});
Route::get('408', function () {
    \Log::error('408エラーのテスト');
    abort(408); //500のHTTPステータスコードを返す指定
});
Route::get('414', function () {
    \Log::error('414エラーのテスト');
    abort(414); //500のHTTPステータスコードを返す指定
});
Route::get('419', function () {
    \Log::error('419エラーのテスト');
    abort(419); //500のHTTPステータスコードを返す指定
});
Route::get('500', function () {
    \Log::error('500エラーのテスト');
    abort(500); //500のHTTPステータスコードを返す指定
});
Route::get('503', function () {
    \Log::error('503エラーのテスト');
    abort(503); //500のHTTPステータスコードを返す指定
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

/*------------------------------------------------------------
オリジナル
------------------------------------------------------------*/
// topページ
Route::get('/', function () {
    return view('top');
})->name('top');

// アクセスページ
Route::get('/access', function () {
    return view('access.index');
})->name('access');

// 客室ページ
Route::get('/room', function () {
    return view('room.index');
})->name('room');

/*-----------------------------
お問い合わせページ(※resource)
-----------------------------*/
Route::resource('/contact', ContactController::class);

Route::post('/contact/confirm', [ContactController::class,'confirm'])->name('contact.confirm');
/*-----------------------------
宿泊プラン
-----------------------------*/
Route::resource('/plan', PlanController::class);
