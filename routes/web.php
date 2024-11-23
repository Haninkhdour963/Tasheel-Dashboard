<?php

use App\Http\Controllers\Admin\JobBidController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TechnicianProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EscrowPaymentController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ContactController;




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
    Route::resource('disputes', App\Http\Controllers\Admin\DisputeController::class);



    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('users', [DashboardController::class, 'users']);
        Route::post('add-user', [DashboardController::class, 'addUser']);
        Route::delete('delete-user/{id}', [DashboardController::class, 'deleteUser']);

        Route::get('categories', [DashboardController::class, 'categories']);
        Route::post('add-category', [DashboardController::class, 'addCategory']);
        Route::delete('delete-category/{id}', [DashboardController::class, 'deleteCategory']);
    });




    // Category Routes
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::get('restore-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'restore']);


// Dispute Routes
    Route::get('dispute', [App\Http\Controllers\Admin\DisputeController::class, 'index']); // List all disputes
    Route::get('add-dispute', [App\Http\Controllers\Admin\DisputeController::class, 'create']); // Show form to add a dispute
    Route::post('add-dispute', [App\Http\Controllers\Admin\DisputeController::class, 'store']); // Store a new dispute
    Route::get('edit-dispute/{dispute_id}', [App\Http\Controllers\Admin\DisputeController::class, 'edit']); // Show form to edit a dispute
    Route::put('update-dispute/{dispute_id}', [App\Http\Controllers\Admin\DisputeController::class, 'update']); // Update a dispute
    Route::get('delete-dispute/{dispute_id}', [App\Http\Controllers\Admin\DisputeController::class, 'destroy']); // Delete a dispute
    Route::get('restore-dispute/{dispute_id}', [App\Http\Controllers\Admin\DisputeController::class, 'restore']); // Restore a deleted dispute (if soft delete is used)
    Route::get('show-dispute/{dispute_id}', [App\Http\Controllers\Admin\DisputeController::class, 'show']); // Show a specific dispute






        // Escrow Payment Routes
        Route::get('escrowPayment', [EscrowPaymentController::class, 'index']);
        Route::get('add-escrow-payment', [EscrowPaymentController::class, 'create']);
        Route::post('add-escrow-payment', [EscrowPaymentController::class, 'store']);
        Route::get('edit-escrow-payment/{payment_id}', [EscrowPaymentController::class, 'edit']);
        Route::put('update-escrow-payment/{payment_id}', [EscrowPaymentController::class, 'update']);
        Route::get('delete-escrow-payment/{payment_id}', [EscrowPaymentController::class, 'destroy']);
// Job Bid Routes


    Route::get('job-bids', [JobBidController::class, 'index'])->name('job-bids.index');
    Route::get('add-job-bid', [JobBidController::class, 'create'])->name('job-bids.create');
    Route::post('add-job-bid', [JobBidController::class, 'store'])->name('job-bids.store');
    Route::get('edit-job-bid/{bid_id}', [JobBidController::class, 'edit'])->name('job-bids.edit');
    Route::put('update-job-bid/{bid_id}', [JobBidController::class, 'update'])->name('job-bids.update');
    Route::get('delete-job-bid/{bid_id}', [JobBidController::class, 'destroy'])->name('job-bids.destroy');




// Technician Profile Routes
    Route::get('technician_profiles', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'index']);
    Route::get('add-technician_profile', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'create']);
    Route::post('add-technician_profile', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'store']);
    Route::get('edit-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'edit']);
    Route::put('update-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'update']);
    Route::get('delete-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'destroy']);
    Route::get('restore-technician_profile/{technician_profile_id}', [App\Http\Controllers\Admin\TechnicianProfileController::class, 'restore']);


    // Job Posting Routes
    Route::get('jobPosting', [App\Http\Controllers\Admin\JobPostingController::class, 'index'])->name('admin.job_postings.index');
    Route::get('add-jobPosting', [App\Http\Controllers\Admin\JobPostingController::class, 'create'])->name('admin.job_postings.create');
    Route::post('add-jobPosting', [App\Http\Controllers\Admin\JobPostingController::class, 'store'])->name('admin.job_postings.store');
    Route::get('edit-jobPosting/{jobPosting_id}', [App\Http\Controllers\Admin\JobPostingController::class, 'edit'])->name('admin.job_postings.edit');
    Route::put('update-jobPosting/{jobPosting_id}', [App\Http\Controllers\Admin\JobPostingController::class, 'update'])->name('admin.job_postings.update');
    Route::delete('delete-jobPosting/{jobPosting_id}', [App\Http\Controllers\Admin\JobPostingController::class, 'destroy'])->name('admin.job_postings.destroy');
    Route::get('restore-jobPosting/{jobPosting_id}', [App\Http\Controllers\Admin\JobPostingController::class, 'restore'])->name('admin.job_postings.restore');




    // Review Routes
    Route::get('reviews', [ReviewController::class, 'index']);
    Route::get('add-review', [ReviewController::class, 'create']);
    Route::post('add-review', [ReviewController::class, 'store']);
    Route::get('edit-review/{review_id}', [ReviewController::class, 'edit']);
    Route::put('update-review/{review_id}', [ReviewController::class, 'update']);
    Route::get('delete-review/{review_id}', [ReviewController::class, 'destroy']);
    Route::get('restore-review/{review_id}', [ReviewController::class, 'restore']);



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




        Route::resource('contacts', ContactController::class);


});
