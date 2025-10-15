<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Cache cleared';
});

Route::middleware(['guest'])->prefix('/')->name('cakning.')->group(function () {
    Route::get('/', [GuestController::class, 'home'])->name('home');
    Route::get('/about', [GuestController::class, 'about'])->name('about');
    Route::get('/event', [GuestController::class, 'event'])->name('event');
    Route::get('/blog', [GuestController::class, 'blog'])->name('blog');
    Route::get('/gallery', [GuestController::class, 'gallery'])->name('gallery');
    Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
    Route::post('/contact', [GuestController::class, 'submitContact'])->name('contact.submit');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// // // Group route yang memerlukan autentikasi
// Route::middleware(['auth'])->group(function () {

//     // Proses logout
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/dashboard/export', [DashboardController::class, 'exportPdf'])->name('export.report');


//     Route::prefix('/profile')->name('profile.')->group(function () {
//         Route::get('/', [ProfileController::class, 'index'])->name('index');
//         Route::put('/edit/{id}', [ProfileController::class, 'update'])->name('edit');
//         Route::get('/', [ProfileController::class, 'index'])->name('index');
//         Route::get('/', [ProfileController::class, 'index'])->name('index');
//     });

//     // Route khusus admin
//     Route::middleware(['admin'])->group(function () {

//         Route::name('naive-bayes.')->group(function () {
//             Route::prefix('/dataset')->name('dataset.')->group(function () {
//                 Route::get('/', [DatasetController::class, 'index'])->name('index');
//                 Route::post('/import', [DatasetController::class, 'import'])->name('import');
//                 Route::delete('/delete-all', [DatasetController::class, 'deleteAll'])->name('deleteAll');
//                 Route::post('/clear-session', [DatasetController::class, 'clearSession'])->name('clear-session');
//                 Route::get('/clear-session', [DatasetController::class, 'clearSession'])->name('clear-session');
//             });

//             Route::get('/initial-process', [InitialProcessController::class, 'index'])->name('initial-process');

//             Route::prefix('/performance')->name('performance.')->group(function () {
//                 Route::get('/', [PerformanceController::class, 'index'])->name('index');
//                 Route::post('/calculate', [PerformanceController::class, 'calculate'])->name('calculate');
//                 Route::get('/lazy/training', [PerformanceController::class, 'lazyLoadTraining'])->name('lazy.training');
//                 Route::get('/lazy/testing', [PerformanceController::class, 'lazyLoadTesting'])->name('lazy.testing');
//                 Route::get('/lazy/process-testing', [PerformanceController::class, 'lazyLoadProcess'])->name('lazy.process');
//             });

//             Route::prefix('/prediction')->name('prediction.')->group(function () {
//                 Route::match(['get', 'post'], '/', [PredictionController::class, 'index'])->name('index');
//             });
//         });

//         Route::prefix('/karyawan')->name('karyawan.')->group(function () {
//             Route::get('/', [KaryawanController::class, 'index'])->name('index');
//             Route::post('/store', [KaryawanController::class, 'store'])->name('store');
//             Route::put('/update/{id}', [KaryawanController::class, 'update'])->name('update');
//             Route::delete('/delete/{id}', [KaryawanController::class, 'destroy'])->name('delete');
//             Route::get('/create', function () {
//                 return view('pages.karyawan.create');
//             })->name('create');
//         });
//     });

//     // Route khusus karyawan
//     // Route::middleware(['karyawan'])->group(function () {
//     //     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('keryawan.dashboard');
//     // });
// });
