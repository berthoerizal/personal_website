<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ConfigwebController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NurrahmaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('skill', SkillController::class)->middleware('auth');
Route::resource('portfolio', PortfolioController::class)->middleware('auth');
Route::resource('experience', ExperienceController::class)->middleware('auth');
Route::resource('certificate', CertificateController::class)->middleware('auth');
Route::resource('post', PostController::class)->middleware('auth');
Route::get('/configweb', [ConfigwebController::class, 'index'])->middleware('auth');
Route::put('/configweb/{id}', [ConfigwebController::class, 'update'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/nurrahma', [NurrahmaController::class, 'index'])->name('nurrahma');
Route::get('/nurrahma/page2', [NurrahmaController::class, 'index2'])->name('nurrahma-page2');
Route::get('/nurrahma/page3', [NurrahmaController::class, 'index3'])->name('nurrahma-page3');
Route::get('/nurrahma/page4', [NurrahmaController::class, 'index4'])->name('nurrahma-page4');
Route::post('/nurrahma/savealamat', [NurrahmaController::class, 'savealamat'])->name('save-alamat');
Route::get('/nurrahma/page5', [NurrahmaController::class, 'index5'])->name('nurrahma-page5');

// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/skill', [SkillController::class, 'index']);
// Route::post('/skill', [SkillController::class, 'store']);
// Route::put('/skill/{id}', [SkillController::class, 'update']);
