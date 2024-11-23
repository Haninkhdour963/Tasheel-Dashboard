<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DisputeFormRequest;
use Illuminate\Http\Request;
use App\Models\Dispute;




class DisputeController extends Controller
{
    public function index()
    {
        $disputes = Dispute::all();
       return view('admin.dispute.index', compact('disputes'));
    }

    public function create()
    {
        // If needed, return a view for creating disputes
        return view('admin.dispute.create');
    }

    public function store(DisputeFormRequest $request)
    {
        $dispute = Dispute::create($request->validated());
        return response()->json(['message' => 'Dispute created successfully', 'data' => $dispute], 201);
    }

    public function show(Dispute $dispute)
    {
        return response()->json($dispute);
    }

    public function edit(Dispute $dispute)
    {
        // If needed, return a view for editing disputes
    }

    public function update(UpdateDisputeRequest $request, Dispute $dispute)
    {
        $dispute->update($request->validated());
        return response()->json(['message' => 'Dispute updated successfully', 'data' => $dispute]);
    }

    public function destroy(Dispute $dispute)
    {
        $dispute->delete();
        return response()->json(['message' => 'Dispute deleted successfully']);
    }
}
