<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/upvc_details', function () {
    return view('upvc_details');
})->name('upvc_details');
Route::get('/led_mirrors', function () {
    return view('led_mirrors');
})->name('led_mirrors');
Route::get('/diamond_cute_glass_work', function () {
    return view('diamond_cute_glass_work');
})->name('diamond_cute_glass_work');
Route::get('/12_mm_glass_work', function () {
    return view('12_mm_glass_work');
})->name('12_mm_glass_work');
Route::get('/12_mm_glass_sky_light', function () {
    return view('12_mm_glass_sky_light');
})->name('12_mm_glass_sky_light');
Route::get('/glazed_windows', function () {
    return view('glazed_windows');
})->name('glazed_windows');
Route::get('/demo_videos', function () {
    return view('demo_videos');
})->name('demo_videos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
