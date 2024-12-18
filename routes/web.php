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

    // Routes for role-based access (Admin, Client, Technician)

    Route::middleware(['auth'])->group(function () {

        // Admin Routes
        Route::prefix('admin')->middleware('role:admin')->group(function () {
            Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
            Route::resource('users', AdminUserController::class)->names('admin.users');
            Route::resource('admins', AdminAdminController::class)->names('admin.admins');
            Route::resource('technicians', AdminTechnicianController::class)->names('admin.technicians');
            Route::resource('categories', AdminCategoryController::class)->names('admin.categories');
            Route::resource('jobPostings', AdminJobPostingController::class)->names('admin.jobPostings');
            Route::resource('jobBids', AdminJobBidController::class)->names('admin.jobBids');
            Route::resource('escrowPayments', AdminEscrowPaymentController::class)->names('admin.escrowPayments');
            Route::resource('payments', AdminPaymentController::class)->names('admin.payments');
            Route::resource('reviews', AdminReviewController::class)->names('admin.reviews');
            Route::resource('disputes', AdminDisputeController::class)->names('admin.disputes');
            Route::resource('contacts', AdminContactController::class)->names('admin.contacts');
            Route::resource('adminActions', AdminAdminActionController::class)->names('admin.adminActions');
            
        });

        // Client Routes
        Route::prefix('client')->middleware('role:client')->group(function () {
            Route::get('/dashboard', [ClientDashboard::class, 'index'])->name('client.dashboard');
            Route::resource('users', ClientUserController::class)->names('client.users');
            Route::resource('jobPostings', ClientJobPostingController::class)->names('client.jobPostings');
            Route::resource('payments', ClientPaymentController::class)->names('client.payments');
            Route::resource('reviews', ClientReviewController::class)->names('client.reviews');
            Route::resource('contacts', ClientContactController::class)->names('client.contacts');
        });

        // Technician Routes
        Route::prefix('technician')->middleware('role:technician')->group(function () {
            Route::get('/dashboard', [TechnicianDashboard::class, 'index'])->name('technician.dashboard');
            Route::resource('technicians', TechnicianTechnicianController::class)->names('technician.technicians');
            Route::post('technicians/{id}/soft-delete', [TechnicianTechnicianController::class, 'softDelete'])->name('technician.technicians.softDelete');

            Route::resource('jobBids', TechnicianJobBidController::class)->names('technician.jobBids');
            Route::resource('escrowPayments', TechnicianEscrowPaymentController::class)->names('technician.escrowPayments');
            Route::resource('payments', TechnicianPaymentController::class)->names('technician.payments');
            Route::resource('reviews', TechnicianReviewController::class)->names('technician.reviews');
            Route::resource('contacts', TechnicianContactController::class)->names('technician.contacts');
        });

    });

    require __DIR__.'/auth.php';
