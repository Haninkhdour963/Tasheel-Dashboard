<!-- resources/views/admin/escrow_payments/index.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Escrow Payments</h2>

        <!-- Link to create a new payment -->
        <a href="{{ url('admin/add-escrow-payments') }}" class="btn btn-success mb-3">Create New Payment</a>

        <!-- Display list of escrow payments -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Payment ID</th>
                <th>Job ID</th>
                <th>Client ID</th>
                <th>Technician ID</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->payment_id }}</td>
                    <td>{{ $payment->job_id }}</td>
                    <td>{{ $payment->client_id }}</td>
                    <td>{{ $payment->technician_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->status }}</td>
                    <td>
                        <a href="{{ url('admin/edit-escrow-payment', $payment->payment_id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('admin/delete-escrow-payment', $payment->payment_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
