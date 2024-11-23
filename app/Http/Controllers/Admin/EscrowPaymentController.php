<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\EscrowPaymentFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EscrowPayment;


class EscrowPaymentController extends Controller
{
    // Display a listing of escrow payments
    public function index()
    {
        $payments = EscrowPayment::all();
        return view('admin.escrowPayment.index', compact('payments'));
    }
    public function create()
    {
        return view('admin.escrowPayment.create');
    }

    // Store a newly created escrow payment
    public function store(EscrowPaymentFormRequest $request)
    {
        $payment = EscrowPayment::create($request->validated());
        return response()->json(['message' => 'Payment created successfully', 'payment' => $payment], 201);
    }

    // Display a specific escrow payment
    public function show($id)
    {
        $payment = EscrowPayment::findOrFail($id);
        return response()->json($payment);
    }

    // Update the specified escrow payment
    public function update(EscrowPaymentFormRequest $request, $id)
    {
        $payment = EscrowPayment::findOrFail($id);
        $payment->update($request->validated());
        return response()->json(['message' => 'Payment updated successfully', 'payment' => $payment]);
    }

    // Remove the specified escrow payment
    public function destroy($id)
    {
        $payment = EscrowPayment::findOrFail($id);
        $payment->delete();
        return response()->json(['message' => 'Payment deleted successfully']);
    }
}
