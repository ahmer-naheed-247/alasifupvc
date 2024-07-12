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
Route::get('/commodor_hamza', function () {
    return view('commodor_hamza');
})->name('commodor_hamza');
Route::get('/advocate_jaleel', function () {
    return view('advocate_jaleel');
})->name('advocate_jaleel');
Route::get('/core_commander_office', function () {
    return view('core_commander_office');
})->name('core_commander_office');
Route::get('/brid_khaleeq', function () {
    return view('brid_khaleeq');
})->name('brid_khaleeq');
Route::get('/capt_emad', function () {
    return view('capt_emad');
})->name('capt_emad');
Route::get('/core_cmdr_faheem', function () {
    return view('core_cmdr_faheem');
})->name('core_cmdr_faheem');
Route::get('/general_umar', function () {
    return view('general_umar');
})->name('general_umar');
Route::get('/jamia_masjid_quba', function () {
    return view('jamia_masjid_quba');
})->name('jamia_masjid_quba');
Route::get('/tahir_taxila', function () {
    return view('tahir_taxila');
})->name('tahir_taxila');
Route::get('/cntmnt_host_saadar', function () {
    return view('cntmnt_host_saadar');
})->name('cntmnt_host_saadar');
Route::get('/masood_saab_chk_shahzad', function () {
    return view('masood_saab_chk_shahzad');
})->name('masood_saab_chk_shahzad');
Route::get('/colonel_shams_naval', function () {
    return view('colonel_shams_naval');
})->name('colonel_shams_naval');
Route::get('/colonel_ayaz_dha', function () {
    return view('colonel_ayaz_dha');
})->name('colonel_ayaz_dha');
Route::get('/core_cmd_offc_raheema_abad', function () {
    return view('core_cmd_offc_raheema_abad');
})->name('core_cmd_offc_raheema_abad');
Route::get('/major_hassan_margalla', function () {
    return view('major_hassan_margalla');
})->name('major_hassan_margalla');
Route::get('/sohail_saab_dudyal', function () {
    return view('sohail_saab_dudyal');
})->name('sohail_saab_dudyal');
Route::get('/aps_school_hamayu', function () {
    return view('aps_school_hamayu');
})->name('aps_school_hamayu');
Route::get('/colonel_shah_rukh', function () {
    return view('colonel_shah_rukh');
})->name('colonel_shah_rukh');
Route::get('/general_Hasan_dha', function () {
    return view('general_Hasan_dha');
})->name('general_Hasan_dha');
Route::get('/zumarad_khan_sweet_home', function () {
    return view('zumarad_khan_sweet_home');
})->name('zumarad_khan_sweet_home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
