<?php

namespace App\Http\Controllers\Admin;
use App\Models\Dispute;
use App\Models\EscrowPayment;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TechnicianProfile;
use App\Models\JobPosting;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $jobs = JobPosting::count();
        $disputes = Dispute::where('status', 'open')->count();
        $revenue = EscrowPayment::where('status', 'completed')->sum('amount');

        return view('admin.dashboard', compact('users', 'jobs', 'disputes', 'revenue'));
    }

    // CRUD for Users
    public function users()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:client,Technician,admin',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password_hash' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'User added successfully');
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    // CRUD for Categories
    public function categories()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:100',
            'description' => 'nullable|string',
        ]);

        Category::create($request->all());
        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    // Add similar CRUD operations for Job Postings, Bids, etc.
}
