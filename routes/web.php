<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\TechnicianController as AdminTechnicianController;
use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\JobPostingController as AdminJobPostingController;
use App\Http\Controllers\Admin\JobBidController as AdminJobBidController;
use App\Http\Controllers\Admin\EscrowPaymentController as AdminEscrowPaymentController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\DisputeController as AdminDisputeController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\AdminActionController as AdminAdminActionController;
use App\Http\Controllers\Client\DashboardController as ClientDashboard;
use App\Http\Controllers\Technician\DashboardController as TechnicianDashboard;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------|
| Web Routes                                                              |
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These   |
| routes are loaded by the RouteServiceProvider and all of them will      |
| be assigned to the "web" middleware group. Make something great!         |
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authenticated user group for role-based access
Route::middleware(['auth'])->group(function () {
    // Admin Routes
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

        // Users routes with resource and soft delete
        Route::resource('users', AdminUserController::class);
        Route::post('users/{id}/soft-delete', [AdminUserController::class, 'softDelete'])->name('users.softDelete');

        // Admins routes
        Route::resource('admins', AdminAdminController::class);
        Route::post('admins/{id}/soft-delete', [AdminAdminController::class, 'softDelete'])->name('admins.softDelete');

        // JobPosting Routes
        Route::resource('jobPostings', AdminJobPostingController::class);
        Route::post('/jobPostings/{id}/soft-delete', [AdminJobPostingController::class, 'softDelete'])->name('jobPostings.softDelete');

        // Soft delete route for JobBids
        Route::post('jobBids/{id}/soft-delete', [AdminJobBidController::class, 'softDelete'])->name('admin.jobBids.softDelete');

        // Soft delete route for escrowPayments
        Route::post('escrowPayments/{id}/soft-delete', [AdminEscrowPaymentController::class, 'softDelete'])->name('admin.escrowPayments.softDelete');

        // Soft delete and restore routes for reviews
        Route::post('reviews/{id}/softDelete', [AdminReviewController::class, 'softDelete'])->name('admin.reviews.softDelete');
        Route::post('reviews/{id}/restore', [AdminReviewController::class, 'restore'])->name('admin.reviews.restore');
        Route::resource('reviews', AdminReviewController::class);  // This will handle the index route

        // Technician Routes
        Route::resource('technicians', AdminTechnicianController::class);
        Route::post('technicians/{id}/soft-delete', [AdminTechnicianController::class, 'softDelete'])->name('technicians.softDelete');

        // Categories, Disputes, Contacts, and AdminActions resources
        Route::resource('categories', AdminCategoryController::class);
        Route::post('categories/{id}/soft-delete', [AdminCategoryController::class, 'softDelete'])->name('categories.softDelete');



        Route::resource('jobPostings', AdminJobPostingController::class);
        Route::resource('jobBids', AdminJobBidController::class);
        Route::resource('escrowPayments', AdminEscrowPaymentController::class);
        Route::resource('payments', AdminPaymentController::class);
        
        // Dispute Routes (Including soft delete and restore functionality)
        Route::get('disputes', [AdminDisputeController::class, 'index'])->name('disputes.index');
        Route::post('disputes/{id}/softDelete', [AdminDisputeController::class, 'softDelete'])->name('disputes.softDelete');
        Route::post('disputes/{id}/restore', [AdminDisputeController::class, 'restore'])->name('disputes.restore');
        Route::resource('disputes', AdminDisputeController::class); // This will handle the index route
        
        Route::resource('contacts', AdminContactController::class);
        Route::post('contacts/{id}/soft-delete', [AdminContactController::class, 'softDelete'])->name('contacts.softDelete');
        Route::post('contacts/{id}/restore', [AdminContactController::class, 'restore'])->name('contacts.restore');

        // AdminAction Routes
        Route::resource('adminActions', AdminAdminActionController::class);
        Route::post('adminActions/{id}/soft-delete', [AdminAdminActionController::class, 'softDelete'])->name('adminActions.softDelete');
        Route::put('adminActions/{id}', [AdminAdminActionController::class, 'update'])->name('admin-adminActions.update');

    });

    // Client Routes
    Route::prefix('client')->middleware('role:client')->group(function () {
        Route::get('/dashboard', [ClientDashboard::class, 'index'])->name('client.dashboard');
    });

    // Technician Routes
    Route::prefix('technician')->middleware('role:technician')->group(function () {
        Route::get('/dashboard', [TechnicianDashboard::class, 'index'])->name('technician.dashboard');
    });
});

require __DIR__.'/auth.php';
