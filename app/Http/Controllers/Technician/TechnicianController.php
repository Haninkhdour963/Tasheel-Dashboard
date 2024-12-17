<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use App\Models\Technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:technician');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all technicians, including soft-deleted ones
        $technicians = Technician::withTrashed()->get();
        return view('technician.technicians.index', compact('technicians'));
    }

    /**
     * Soft delete the technician.
     */
    public function softDelete($id)
    {
        $technician = Technician::findOrFail($id);

        // Soft delete the technician
        $technician->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This would render a view for creating a new technician
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logic to store a new technician in the database
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Logic to show a single technician by their ID
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Logic for showing the edit form for a technician
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Logic to update a technician's details
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Logic to permanently delete a technician
    }
}
