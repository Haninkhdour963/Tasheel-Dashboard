<!-- resources/views/admin/escrow_payments/edit.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Escrow Payment</h2>

        <!-- Form for editing an existing escrow payment -->
        <form action="{{ route('admin.escrow-payments.update', $payment->payment_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="job_id">Job ID</label>
                <input type="number" name="job_id" class="form-control" value="{{ old('job_id', $payment->job_id) }}" required>
                @error('job_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="client_id">Client ID</label>
                <input type="number" name="client_id" class="form-control" value="{{ old('client_id', $payment->client_id) }}" required>
                @error('client_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="technician_id">Technician ID</label>
                <input type="number" name="technician_id" class="form-control" value="{{ old('technician_id', $payment->technician_id) }}" required>
                @error('technician_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount', $payment->amount) }}" required>
                @error('amount') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="hold" {{ old('status', $payment->status) == 'hold' ? 'selected' : '' }}>Hold</option>
                    <option value="completed" {{ old('status', $payment->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="refunded" {{ old('status', $payment->status) == 'refunded' ? 'selected' : '' }}>Refunded</option>
                </select>
                @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Payment</button>
        </form>
    </div>
@endsection
