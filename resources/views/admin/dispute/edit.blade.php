@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Dispute</h1>
        <form action="{{ url('update-dispute/' . $dispute->dispute_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="job_id" class="form-label">Job ID</label>
                <input type="number" class="form-control" id="job_id" name="job_id" value="{{ $dispute->job_id }}" required>
            </div>
            <div class="mb-3">
                <label for="client_id" class="form-label">Client ID</label>
                <input type="number" class="form-control" id="client_id" name="client_id" value="{{ $dispute->client_id }}" required>
            </div>
            <div class="mb-3">
                <label for="technician_id" class="form-label">Technician ID</label>
                <input type="number" class="form-control" id="technician_id" name="technician_id" value="{{ $dispute->technician_id }}" required>
            </div>
            <div class="mb-3">
                <label for="reason" class="form-label">Reason</label>
                <textarea class="form-control" id="reason" name="reason" rows="3" required>{{ $dispute->reason }}</textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="open" {{ $dispute->status == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="resolved" {{ $dispute->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                    <option value="closed" {{ $dispute->status == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
