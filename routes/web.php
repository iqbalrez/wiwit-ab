<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ContactMeController;
use App\Http\Controllers\User\EventsController;
use App\Http\Controllers\User\MaterialController;
use App\Http\Controllers\User\PortofolioController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

Route::get('/', [HomeController::class, 'index']);
// Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Events
Route::get('events', [EventsController::class, 'index'])->name('events.index');

// Material
Route::get('material', [MaterialController::class, 'index'])->name('material.index');

// Portofolio
Route::get('portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');

// Contact Us
Route::get('contact-me', [ContactMeController::class, 'index'])->name('contact-me.index');

Route::get('/admin', function () {
    return view('admin');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});


require __DIR__ . '/auth.php';
