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
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('login.throttle')
    ->name('login.perform');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Dashboard routes dengan authentication middleware
Route::middleware(['auth'])->group(function () {

    // Main Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/export', [DashboardController::class, 'exportPdf'])->name('dashboard.export');

    // Admin Dashboard Routes
    Route::prefix('admin')->name('admin.')->group(function () {

        /**
         * Blog Management Dashboard & Operations
         * Handles all blog-related CRUD operations and analytics
         */
        Route::prefix('blog')->name('blog.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
            Route::get('/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [\App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
            Route::put('/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
            Route::delete('/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');

            // Additional blog-specific routes
            Route::post('/{id}/publish', [\App\Http\Controllers\Admin\BlogController::class, 'publish'])->name('publish');
            Route::post('/{id}/unpublish', [\App\Http\Controllers\Admin\BlogController::class, 'unpublish'])->name('unpublish');
            Route::get('/analytics/engagement', [\App\Http\Controllers\Admin\BlogController::class, 'analytics'])->name('analytics');
        });

        /**
         * Event Management Dashboard & Operations
         * Handles event scheduling, management, and reporting
         */
        Route::prefix('events')->name('events.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\EventController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\EventController::class, 'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\EventController::class, 'store'])->name('store');
            Route::get('/{id}', [\App\Http\Controllers\Admin\EventController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [\App\Http\Controllers\Admin\EventController::class, 'edit'])->name('edit');
            Route::put('/{id}', [\App\Http\Controllers\Admin\EventController::class, 'update'])->name('update');
            Route::delete('/{id}', [\App\Http\Controllers\Admin\EventController::class, 'destroy'])->name('destroy');

            // Event-specific routes
            Route::get('/calendar/view', [\App\Http\Controllers\Admin\EventController::class, 'calendar'])->name('calendar');
            Route::get('/analytics/attendance', [\App\Http\Controllers\Admin\EventController::class, 'analytics'])->name('analytics');
            Route::post('/{id}/approve', [\App\Http\Controllers\Admin\EventController::class, 'approve'])->name('approve');
        });

        /**
         * Talent Management Dashboard & Operations
         * Handles talent profiles, ratings, and portfolio management
         */
        Route::prefix('talents')->name('talents.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\TalentController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\TalentController::class, 'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\TalentController::class, 'store'])->name('store');
            Route::get('/{id}', [\App\Http\Controllers\Admin\TalentController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [\App\Http\Controllers\Admin\TalentController::class, 'edit'])->name('edit');
            Route::put('/{id}', [\App\Http\Controllers\Admin\TalentController::class, 'update'])->name('update');
            Route::delete('/{id}', [\App\Http\Controllers\Admin\TalentController::class, 'destroy'])->name('destroy');

            // Talent-specific routes
            Route::get('/portfolio/manage', [\App\Http\Controllers\Admin\TalentController::class, 'portfolio'])->name('portfolio');
            Route::get('/ratings/overview', [\App\Http\Controllers\Admin\TalentController::class, 'ratings'])->name('ratings');
            Route::get('/schedule/calendar', [\App\Http\Controllers\Admin\TalentController::class, 'schedule'])->name('schedule');
            Route::post('/{id}/activate', [\App\Http\Controllers\Admin\TalentController::class, 'activate'])->name('activate');
            Route::post('/{id}/deactivate', [\App\Http\Controllers\Admin\TalentController::class, 'deactivate'])->name('deactivate');
        });

        /**
         * Assignment Management Dashboard & Operations
         * Handles task assignments, tracking, and completion
         */
        Route::prefix('assignments')->name('assignments.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\AssignmentController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\AssignmentController::class, 'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\AssignmentController::class, 'store'])->name('store');
            Route::get('/{id}', [\App\Http\Controllers\Admin\AssignmentController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [\App\Http\Controllers\Admin\AssignmentController::class, 'edit'])->name('edit');
            Route::put('/{id}', [\App\Http\Controllers\Admin\AssignmentController::class, 'update'])->name('update');
            Route::delete('/{id}', [\App\Http\Controllers\Admin\AssignmentController::class, 'destroy'])->name('destroy');

            // Assignment-specific routes
            Route::get('/schedule/calendar', [\App\Http\Controllers\Admin\AssignmentController::class, 'schedule'])->name('schedule');
            Route::get('/reports/performance', [\App\Http\Controllers\Admin\AssignmentController::class, 'reports'])->name('reports');
            Route::get('/budgets/management', [\App\Http\Controllers\Admin\AssignmentController::class, 'budgets'])->name('budgets');
            Route::post('/{id}/complete', [\App\Http\Controllers\Admin\AssignmentController::class, 'complete'])->name('complete');
            Route::post('/{id}/cancel', [\App\Http\Controllers\Admin\AssignmentController::class, 'cancel'])->name('cancel');
        });

        /**
         * Payroll Management Dashboard & Operations
         * Handles salary processing, tax calculations, and payment tracking
         */
        Route::prefix('payroll')->name('payroll.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\PayrollController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\PayrollController::class, 'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\PayrollController::class, 'store'])->name('store');
            Route::get('/{id}', [\App\Http\Controllers\Admin\PayrollController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [\App\Http\Controllers\Admin\PayrollController::class, 'edit'])->name('edit');
            Route::put('/{id}', [\App\Http\Controllers\Admin\PayrollController::class, 'update'])->name('update');
            Route::delete('/{id}', [\App\Http\Controllers\Admin\PayrollController::class, 'destroy'])->name('destroy');

            // Payroll-specific routes
            Route::post('/bulk-process', [\App\Http\Controllers\Admin\PayrollController::class, 'bulkProcess'])->name('bulk-process');
            Route::get('/reports/summary', [\App\Http\Controllers\Admin\PayrollController::class, 'reports'])->name('reports');
            Route::get('/tax-management', [\App\Http\Controllers\Admin\PayrollController::class, 'taxManagement'])->name('tax-management');
            Route::post('/{id}/process-payment', [\App\Http\Controllers\Admin\PayrollController::class, 'processPayment'])->name('process-payment');
            Route::get('/export/report', [\App\Http\Controllers\Admin\PayrollController::class, 'exportReport'])->name('export-report');
        });
    });
});

