<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SejarahImaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SejarahArosbayaController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PsdmController;
use App\Http\Controllers\BphController;
use App\Http\Controllers\KeilmuanController;
use App\Http\Controllers\PpdController;
use App\Http\Controllers\MinbaController;
use App\Http\Controllers\ItController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminDivisicontroller;
use App\Http\Controllers\DivisiDetailController;
use App\Http\Controllers\DivisiPublicController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
// Route::get('/sejarah-ima', [SejarahImaController::class, 'index'])->name('sejarah_ima');
Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::get('/sejarah-arosbaya', [SejarahArosbayaController::class, 'index'])->name('sejarah_arosbaya');


Route::get('/psdm', [PsdmController::class, 'index'])->name('Divisi_Psdm');
Route::get('/bph', [BphController::class, 'index'])->name('Badan_pengurus_harian');
Route::get('/keilmuan', [KeilmuanController::class, 'index'])->name('Keilmuan');
Route::get('/ppd', [PpdController::class, 'index'])->name('ppd');
Route::get('/minba', [MinbaController::class, 'index'])->name('minba');
Route::get('/it', [ItController::class, 'index'])->name('it');


Route::get('/login-admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login-admin', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/logout-admin', [AuthController::class, 'logout'])->name('admin.logout');

// Rute dilindungi dengan middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-ima', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::get('/admin/homemanage', [AdminHomeController::class, 'index'])->name('admin.homemanage');
    Route::post('/admin/update-carousel', [AdminHomeController::class, 'updateCarousel'])->name('admin.update.carousel');
    Route::post('/admin/update-activity', [AdminHomeController::class, 'updateActivity'])->name('admin.update.activity');
    Route::post('/admin/update-history', [AdminHomeController::class, 'updateHistory'])->name('admin.update.history');

    Route::get('/admin/history-ima-manage', [SejarahImaController::class, 'edit'])->name('admin.history.ima.manage');
    Route::put('/admin/update-ima-history', [SejarahImaController::class, 'update'])->name('admin.history.ima.update');

    Route::get('/admin/history-arosbaya-manage', [SejarahArosbayaController::class, 'edit'])->name('admin.history.arosbaya.manage');
    Route::put('/admin/update-arosbaya-history', [SejarahArosbayaController::class, 'update'])->name('admin.history.arosbaya.update');

    Route::get('/admin/structure-manage', [StrukturController::class, 'edit'])->name('admin.structure.manage');
    Route::post('/admin/update-structure', [StrukturController::class, 'updateStructure'])->name('admin.update.structure');

    Route::get('/admin/divisi', [AdminDivisiController::class, 'index'])->name('admin.divisions.index');
    Route::post('/admin/divisi/store', [AdminDivisiController::class, 'store'])->name('admin.divisions.store');
    Route::delete('/{division}', [AdminDivisiController::class, 'destroy'])->name('admin.divisions.destroy');

    Route::get('/admin/divisi/{id}/edit', [AdminDivisiController::class, 'edit'])->name('admin.divisions.edit');
    Route::put('/admin/divisi/{id}', [AdminDivisiController::class, 'update'])->name('admin.divisions.update');

});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/arosbaya', [SejarahArosbayaController::class, 'index'])->name('arosbaya.index');
Route::get('/ima', [SejarahImaController::class, 'index'])->name('ima.index');
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi.index');
Route::get('/divisi/{id}', [DivisiController::class, 'show'])->name('divisi.detail');

Route::get('/blog', [BeritaController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BeritaController::class, 'detail'])->name('blog.detail');