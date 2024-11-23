<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechnicianProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TechnicianProfileFormRequest;

class TechnicianProfileController extends Controller
{
    // Show all technician profiles
    public function index()
    {
        $technicians = TechnicianProfile::with('user')->get();  // Eager load the user relationship
        return view('admin.technicianProfile.index', compact('technicians'));
    }

    // Show create form
    public function create()
    {
        // Get all users who have the 'Technician' role (assuming 'role_as' is the column name)
        $users = User::where('role_as', 'Technician')->get();
        return view('admin.technicianProfile.create', compact('users')); // Pass users to the view
    }

    // Store a new technician profile
    public function store(TechnicianProfileFormRequest $request)
    {
        // Get the validated data from the form request
        $data = $request->validated();

        // Create the technician profile using validated data
        TechnicianProfile::create([
            'Technician_id' => $data['Technician_id'],  // Ensure user_id is passed correctly
            'skills' => $data['skills'],
            'hourly_rate' => $data['hourly_rate'],
            'certifications' => $data['certifications'],
            'bio' => $data['bio'],
            'location' => $data['location'],
            'available_from' => $data['available_from'],
        ]);

        return redirect()->route('admin.technician-profile.index')->with('success', 'Technician profile created successfully!');
    }

    // Show edit form for a specific technician profile
    public function edit($id)
    {
        // Find the technician profile by id
        $technicianProfile = TechnicianProfile::findOrFail($id);

        // Get all users with the 'Technician' role (assuming 'role_as' is the column name)
        $users = User::where('role_as', 'Technician')->get();

        // Return the edit view with technician profile and users data
        return view('admin.technicianProfile.edit', compact('technicianProfile', 'users'));
    }

    // Update technician profile
    public function update(TechnicianProfileFormRequest $request, $id)
    {
        // Find the technician profile by id
        $technicianProfile = TechnicianProfile::findOrFail($id);

        // Update the technician profile using validated data
        $technicianProfile->update($request->validated());

        return redirect()->route('admin.technician-profile.index')->with('success', 'Technician profile updated successfully!');
    }
}
