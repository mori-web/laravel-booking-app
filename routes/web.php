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
