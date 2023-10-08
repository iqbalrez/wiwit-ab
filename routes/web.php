<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\BlogController as UserBlogController;
use App\Http\Controllers\User\ContactMeController as UserContactMeController;
use App\Http\Controllers\User\EventsController as UserEventsController;
use App\Http\Controllers\User\MaterialController as UserMaterialController;
use App\Http\Controllers\User\PortofolioController as UserPortofolioController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ConsultationRequestCategoryController;
use App\Http\Controllers\Admin\ConsultationRequestController;
use App\Http\Controllers\Admin\ContactPageSettingController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\MaterialCategoryController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\WorkCategoryController;



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
Route::get('blog', [UserBlogController::class, 'index'])->name('blog.index');
Route::get('blog/{id}', [UserBlogController::class, 'show'])->name('blog.show');

// Events
Route::get('events', [UserEventsController::class, 'index'])->name('events.index');

// Material
Route::get('material', [UserMaterialController::class, 'index'])->name('material.index');

// Portofolio
Route::get('portofolio', [UserPortofolioController::class, 'index'])->name('portofolio.index');

// Contact Us
Route::get('contact-me', [UserContactMeController::class, 'index'])->name('contact-me.index');

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

    //Blog
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blog');
    });

    //Blog Category
    Route::prefix('blog-category')->group(function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('admin.blog-category');
    });

    //Consultation Request
    Route::prefix('consultation-request')->group(function () {
        Route::get('/', [ConsultationRequestController::class, 'index'])->name('admin.consultation-request');
    });

    //Consultation Request Category
    Route::prefix('consultation-request-category')->group(function () {
        Route::get('/', [ConsultationRequestCategoryController::class, 'index'])->name('admin.consultation-request-category');
    });

    //Contact Page Setting
    Route::prefix('contact-page-setting')->group(function () {
        Route::get('/', [ContactPageSettingController::class, 'index'])->name('admin.contact-page-setting');
    });

    //Event
    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('admin.event');
    });

    //Event Category
    Route::prefix('event-category')->group(function () {
        Route::get('/', [EventCategoryController::class, 'index'])->name('admin.event-category');
    });

    //Experience
    Route::prefix('experience')->group(function () {
        Route::get('/', [ExperienceController::class, 'index'])->name('admin.experience');
    });

    //Material
    Route::prefix('material')->group(function () {
        Route::get('/', [MaterialController::class, 'index'])->name('admin.material');
    });

    //Material Category
    Route::prefix('material-category')->group(function () {
        Route::get('/', [MaterialCategoryController::class, 'index'])->name('admin.material-category');
    });

    //Message
    Route::prefix('message')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('admin.message.index');
        Route::get('{id}', [MessageController::class, 'show'])->name('admin.message.show');
        Route::post('/', [MessageController::class, 'store'])->name('admin.message.store');
        Route::post('{id}/update', [MessageController::class, 'update'])->name('admin.message.update');
        Route::post('{id}/delete', [MessageController::class, 'destroy'])->name('admin.message.destroy');
    });

    //Partner
    Route::prefix('partner')->group(function () {
        Route::get('/', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('{id}', [PartnerController::class, 'show'])->name('admin.partner.show');
        Route::post('/', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::post('{id}/update', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('{id}/delete', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');
    });

    //Social Media
    Route::prefix('social-media')->group(function () {
        Route::get('/', [SocialMediaController::class, 'index'])->name('admin.social-media.index');
        Route::get('{id}', [SocialMediaController::class, 'show'])->name('admin.social-media.show');
        Route::post('/', [SocialMediaController::class, 'store'])->name('admin.social-media.store');
        Route::post('{id}/update', [SocialMediaController::class, 'update'])->name('admin.social-media.update');
        Route::post('{id}/delete', [SocialMediaController::class, 'destroy'])->name('admin.social-media.destroy');
    });

    //Testimonial
    Route::prefix('testimonial')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
        Route::get('{id}', [TestimonialController::class, 'show'])->name('admin.testimonial.show');
        Route::post('/', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
        Route::post('{id}/update', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
        Route::post('{id}/delete', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');
    });

    //Work
    Route::prefix('work')->group(function () {
        Route::get('/', [WorkController::class, 'index'])->name('admin.work');
    });

    //Work Category
    Route::prefix('work-category')->group(function () {
        Route::get('/', [WorkCategoryController::class, 'index'])->name('admin.work-category');
    });
});


require __DIR__ . '/auth.php';
