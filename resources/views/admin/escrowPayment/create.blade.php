<!-- resources/views/admin/escrow_payments/create.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Create Escrow Payment</h2>

        <!-- Form for creating a new escrow payment -->
        <form action="{{ url('admin/add-escrowPayment') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="job_id">Job ID</label>
                <input type="number" name="job_id" class="form-control" value="{{ old('job_id') }}" required>
                @error('job_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="client_id">Client ID</label>
                <input type="number" name="client_id" class="form-control" value="{{ old('client_id') }}" required>
                @error('client_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="technician_id">Technician ID</label>
                <input type="number" name="technician_id" class="form-control" value="{{ old('technician_id') }}" required>
                @error('technician_id') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount') }}" required>
                @error('amount') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="hold" {{ old('status') == 'hold' ? 'selected' : '' }}>Hold</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="refunded" {{ old('status') == 'refunded' ? 'selected' : '' }}>Refunded</option>
                </select>
                @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Payment</button>
        </form>
    </div>
@endsection
