@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Edit Job Bid</h1>

        <form action="{{ route('admin.job-bids.update', $jobBid->bid_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="job_id" class="form-label">Job ID</label>
                <input type="number" class="form-control" id="job_id" name="job_id" value="{{ $jobBid->job_id }}" required>
            </div>

            <div class="mb-3">
                <label for="Technician_id" class="form-label">Technician ID</label>
                <input type="number" class="form-control" id="Technician_id" name="Technician_id" value="{{ $jobBid->Technician_id }}" required>
            </div>

            <div class="mb-3">
                <label for="bid_amount" class="form-label">Bid Amount</label>
                <input type="text" class="form-control" id="bid_amount" name="bid_amount" value="{{ $jobBid->bid_amount }}" required>
            </div>

            <div class="mb-3">
                <label for="bid_message" class="form-label">Bid Message</label>
                <textarea class="form-control" id="bid_message" name="bid_message" rows="4" required>{{ $jobBid->bid_message }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="pending" {{ $jobBid->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="accepted" {{ $jobBid->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="declined" {{ $jobBid->status == 'declined' ? 'selected' : '' }}>Declined</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Job Bid</button>
        </form>
    </div>
@endsection
