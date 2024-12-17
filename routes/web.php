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
use App\Http\Controllers\Client\UserController as ClientUserController;
use App\Http\Controllers\Client\JobPostingController as ClientJobPostingController;
use App\Http\Controllers\Client\EscrowPaymentController as ClientEscrowPaymentController;
use App\Http\Controllers\Client\PaymentController as ClientPaymentController;
use App\Http\Controllers\Client\ReviewController as ClientReviewController;
use App\Http\Controllers\Client\ContactController as ClientContactController;
use App\Http\Controllers\Technician\DashboardController as TechnicianDashboard;
use App\Http\Controllers\Technician\TechnicianController as TechnicianTechnicianController;
use App\Http\Controllers\Technician\JobBidController as TechnicianJobBidController;
use App\Http\Controllers\Technician\ReviewController as TechnicianReviewController;
use App\Http\Controllers\Technician\EscrowPaymentController as TechnicianEscrowPaymentController;
use App\Http\Controllers\Technician\PaymentController as TechnicianPaymentController;
use App\Http\Controllers\Technician\ContactController as TechnicianContactController;

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


// Default Dashboard route for authenticated users
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
        Route::post('jobPostings/{id}/soft-delete', [AdminJobPostingController::class, 'softDelete'])->name('jobPostings.softDelete');

        // JobBids
        Route::resource('jobBids', AdminJobBidController::class);
        Route::post('jobBids/{id}/soft-delete', [AdminJobBidController::class, 'softDelete'])->name('jobBids.softDelete');

        // Escrow Payments
        Route::resource('escrowPayments', AdminEscrowPaymentController::class);
        Route::post('escrowPayments/{id}/soft-delete', [AdminEscrowPaymentController::class, 'softDelete'])->name('escrowPayments.softDelete');

        // Payments
        Route::resource('payments', AdminPaymentController::class);

        // Reviews routes (including soft delete and restore)
        Route::resource('reviews', AdminReviewController::class);
        Route::post('reviews/{id}/soft-delete', [AdminReviewController::class, 'softDelete'])->name('reviews.softDelete');
        Route::post('reviews/{id}/restore', [AdminReviewController::class, 'restore'])->name('reviews.restore');

        // Technicians routes (including soft delete)
        Route::resource('technicians', AdminTechnicianController::class);
        Route::post('technicians/{id}/soft-delete', [AdminTechnicianController::class, 'softDelete'])->name('technicians.softDelete');

        // Categories routes
        Route::resource('categories', AdminCategoryController::class);
        Route::post('categories/{id}/soft-delete', [AdminCategoryController::class, 'softDelete'])->name('categories.softDelete');

        // Disputes routes (including soft delete and restore)
        Route::resource('disputes', AdminDisputeController::class);
        Route::post('disputes/{id}/soft-delete', [AdminDisputeController::class, 'softDelete'])->name('disputes.softDelete');
        Route::post('disputes/{id}/restore', [AdminDisputeController::class, 'restore'])->name('disputes.restore');

        // Contacts routes (including soft delete and restore)
        Route::resource('contacts', AdminContactController::class);
        Route::post('contacts/{id}/soft-delete', [AdminContactController::class, 'softDelete'])->name('contacts.softDelete');
        Route::post('contacts/{id}/restore', [AdminContactController::class, 'restore'])->name('contacts.restore');

        // Admin Actions routes (including soft delete and restore)
        Route::resource('adminActions', AdminAdminActionController::class);
        Route::post('adminActions/{id}/soft-delete', [AdminAdminActionController::class, 'destroy'])->name('adminActions.softDelete');
        Route::post('adminActions/{id}/restore', [AdminAdminActionController::class, 'restore'])->name('adminActions.restore');
    });

    
    // Client Routes
    Route::prefix('client')->middleware('role:client')->group(function () {

        Route::get('/dashboard', [ClientDashboard::class, 'index'])->name('client.dashboard');

        // Users routes with resource and soft delete
        Route::resource('users', ClientUserController::class);
        Route::post('users/{id}/soft-delete', [ClientUserController::class, 'softDelete'])->name('users.softDelete');

        // Route to fetch user details
        Route::get('/client/users/{userId}/view-profile', [ClientUserController::class, 'viewProfile']);

        // JobPosting Routes
        Route::resource('jobPostings', ClientJobPostingController::class);
        Route::post('jobPostings/{id}/soft-delete', [ClientJobPostingController::class, 'softDelete'])->name('jobPostings.softDelete');

        // Escrow Payments Routes
        Route::resource('escrowPayments', ClientEscrowPaymentController::class);
      

        // Payments
        Route::resource('payments', ClientPaymentController::class);

        // Reviews routes (including soft delete and restore)
        Route::resource('reviews', ClientReviewController::class);

        // Contacts routes for Clients
        Route::resource('contacts', ClientContactController::class);
    });

    // Technician Routes
    Route::prefix('technician')->middleware('role:technician')->group(function () {
        Route::get('/dashboard', [TechnicianDashboard::class, 'index'])->name('technician.dashboard');

        // Technician-specific routes
        Route::resource('technicians', TechnicianTechnicianController::class);
        Route::post('technicians/{id}/soft-delete', [TechnicianTechnicianController::class, 'softDelete'])->name('technicians.softDelete');

        // JobBids for technician
        Route::resource('jobBids', TechnicianJobBidController::class);
        Route::post('jobBids/{id}/soft-delete', [TechnicianJobBidController::class, 'softDelete'])->name('jobBids.softDelete');

        // Escrow Payments
        Route::resource('escrowPayments', TechnicianEscrowPaymentController::class);

        // Payments for technician
        Route::resource('payments', TechnicianPaymentController::class);

        // Reviews routes (including soft delete and restore)
        Route::resource('reviews', TechnicianReviewController::class);

        // Contacts routes for technician
        Route::resource('contacts', TechnicianContactController::class);
    });
});

require __DIR__.'/auth.php';
