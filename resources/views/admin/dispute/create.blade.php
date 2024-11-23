@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Add New Dispute</h1>
        <form action="{{ url('admin/add-dispute') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="job_id" class="form-label">Job ID</label>
                <input type="number" class="form-control" id="job_id" name="job_id" required>
            </div>
            <div class="mb-3">
                <label for="client_id" class="form-label">Client ID</label>
                <input type="number" class="form-control" id="client_id" name="client_id" required>
            </div>
            <div class="mb-3">
                <label for="technician_id" class="form-label">Technician ID</label>
                <input type="number" class="form-control" id="technician_id" name="technician_id" required>
            </div>
            <div class="mb-3">
                <label for="reason" class="form-label">Reason</label>
                <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="open">Open</option>
                    <option value="resolved">Resolved</option>
                    <option value="closed">Closed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
