<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobBidFormRequest;
use App\Models\JobBid;
use Illuminate\Http\Request;

class JobBidController extends Controller
{
    /**
     * Display a listing of the job bids.
     */
    public function index()
    {
        $jobBids = JobBid::all();
        return view('admin.jobBid.index', compact('jobBids'));
    }
    public function create()
    {
        return view('admin.jobBid.create');
    }
    /**
     * Store a newly created job bid in storage.
     */
    public function store(JobBidFormRequest $request)
    {
        $validated = $request->validated();

        $jobBid = JobBid::create([
            'job_id' => $validated['job_id'],
            'Technician_id' => $validated['Technician_id'],
            'bid_amount' => $validated['bid_amount'],
            'bid_message' => $validated['bid_message'],
            'status' => $validated['status'],
        ]);

        return response()->json(['message' => 'Job bid created successfully', 'data' => $jobBid], 201);
    }

    /**
     * Display the specified job bid.
     */
    public function show($id)
    {
        $jobBid = JobBid::findOrFail($id);
        return response()->json($jobBid);
    }

    /**
     * Update the specified job bid in storage.
     */
    public function update(JobBidFormRequest $request, $id)
    {
        $validated = $request->validated();

        $jobBid = JobBid::findOrFail($id);
        $jobBid->update([
            'job_id' => $validated['job_id'],
            'Technician_id' => $validated['Technician_id'],
            'bid_amount' => $validated['bid_amount'],
            'bid_message' => $validated['bid_message'],
            'status' => $validated['status'],
        ]);

        return response()->json(['message' => 'Job bid updated successfully', 'data' => $jobBid]);
    }

    /**
     * Remove the specified job bid from storage.
     */
    public function destroy($id)
    {
        $jobBid = JobBid::findOrFail($id);
        $jobBid->delete();

        return response()->json(['message' => 'Job bid deleted successfully']);
    }
}
