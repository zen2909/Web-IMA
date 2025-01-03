<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SejarahImaController;
use App\Http\Controllers\SejarahArosbayaController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminDivisicontroller;
use App\Http\Controllers\AdminSejarahArosbayaController;
use App\Http\Controllers\AdminSejarahImaController;
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
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/arosbaya', [SejarahArosbayaController::class, 'index'])->name('arosbaya.index');
Route::get('/ima', [SejarahImaController::class, 'index'])->name('ima.index');
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi.index');
Route::get('/divisi/{id}', [DivisiController::class, 'show'])->name('divisi.detail');
Route::get('/blog', [BeritaController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BeritaController::class, 'detail'])->name('blog.detail');

Route::get('/login-admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login-admin', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/logout-admin', [AuthController::class, 'logout'])->name('admin.logout');

// Rute dilindungi dengan middleware auth
Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/update-dashboard', [AdminDashboardController::class, 'updateCarousel'])->name('admin.update.carousel');
    Route::post('/admin/update-activity', [AdminDashboardController::class, 'updateActivity'])->name('admin.update.activity');
    Route::post('/admin/update-history', [AdminDashboardController::class, 'updateHistory'])->name('admin.update.history');
    Route::post('/admin/update-structure', [AdminDashboardController::class, 'updateStructure'])->name('admin.update.structure');

    Route::get('/admin/arosbaya', [AdminSejarahArosbayaController::class, 'index'])->name('admin.arosbaya');
    Route::put('/admin/arosbaya', [AdminSejarahArosbayaController::class, 'update'])->name('admin.arosbayaupdate');

    Route::get('/admin/ima', [AdminSejarahImaController::class, 'index'])->name('admin.ima');
    Route::put('/admin/ima', [AdminSejarahImaController::class, 'update'])->name('admin.imaupdate');

    Route::get('/admin/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
    Route::get('/admin/blog/add', [AdminBlogController::class, 'add'])->name('admin.blogadd');
    Route::post('/admin/blog/store', [AdminBlogController::class, 'store'])->name('admin.blogstore');
    Route::get('/admin/blog/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blogedit');
    Route::put('/admin/blog/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blogupdate');
    Route::delete('/admin/blog/destroy/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogdestroy');






    Route::get('/admin/history-ima-manage', [SejarahImaController::class, 'edit'])->name('admin.history.ima.manage');
    Route::put('/admin/update-ima-history', [SejarahImaController::class, 'update'])->name('admin.history.ima.update');


    Route::get('/admin/divisi', [AdminDivisiController::class, 'index'])->name('admin.divisions.index');
    Route::post('/admin/divisi/store', [AdminDivisiController::class, 'store'])->name('admin.divisions.store');
    Route::delete('/{division}', [AdminDivisiController::class, 'destroy'])->name('admin.divisions.destroy');

    Route::get('/admin/divisi/{id}/edit', [AdminDivisiController::class, 'edit'])->name('admin.divisions.edit');
    Route::put('/admin/divisi/{id}', [AdminDivisiController::class, 'update'])->name('admin.divisions.update');

});