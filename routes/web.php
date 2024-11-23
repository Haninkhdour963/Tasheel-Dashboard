<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TechnicianProfileController;




// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();

// Client Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    // Category Routes
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::get('restore-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'restore']);





// Technician Profile Routes
    Route::get('technician_profiles', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'index']);
    Route::get('add-technician_profile', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'create']);
    Route::post('add-technician_profile', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'store']);
    Route::get('edit-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'edit']);
    Route::put('update-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'update']);
    Route::get('delete-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'destroy']);
    Route::get('restore-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'restore']);


// Job Posting Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('jobPostings', [JobPostingController::class, 'index'])->name('job_postings.index');
        Route::get('add-jobPosting', [JobPostingController::class, 'create'])->name('job_postings.create');
        Route::post('add-jobPosting', [JobPostingController::class, 'store'])->name('job_postings.store');
        Route::get('edit-jobPosting/{jobPosting}', [JobPostingController::class, 'edit'])->name('job_postings.edit');
        Route::put('update-jobPosting/{jobPosting}', [JobPostingController::class, 'update'])->name('job_postings.update');
        Route::delete('delete-jobPosting/{jobPosting}', [JobPostingController::class, 'destroy'])->name('job_postings.destroy');
        Route::get('restore-jobPosting/{jobPosting}', [JobPostingController::class, 'restore'])->name('job_postings.restore');
    });

    // Post Routes
    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

    // User Routes
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
});
