<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OurHistoryController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\OurProductController;
use App\Http\Controllers\Admin\OurProjectController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\getQuoteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ScheduleConsultationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/getQuote', [getQuoteController::class, 'index'])->name('getQuote');
Route::post('/send-quote', [getQuoteController::class, 'sendQuote'])->name('send.quote');

Route::get('/scheduleConsultation', [ScheduleConsultationController::class, 'index'])->name('scheduleConsultation');
Route::post('/send-schedule', [ScheduleConsultationController::class, 'sendSchedule'])->name('send.schedule');



Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

// Route::prefix('/')->group(function() {
//     Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
// })->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Products
    Route::resource('ourproduct', OurProductController::class)->except(['destroy', 'show']);
    Route::get('ourproduct/delete/{id}', [OurProductController::class , 'delete'])->name('ourproduct.delete');

    // Projects
    Route::resource('project', OurProjectController::class)->except(['destroy', 'show']);
    Route::get('project/delete/{id}', [OurProjectController::class , 'delete'])->name('project.delete');

    // history
    Route::resource('history', OurHistoryController::class)->except(['destroy', 'show']);
    Route::get('history/delete/{id}', [OurHistoryController::class , 'delete'])->name('history.delete');

    // management
    Route::resource('management', ManagementController::class)->except(['destroy', 'show']);
    Route::get('management/delete/{id}', [ManagementController::class , 'delete'])->name('management.delete');

});

require __DIR__.'/auth.php';
