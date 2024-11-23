@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Add Job Bid</h1>

        <form action="{{ url('admin/add-job-bid') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="job_id" class="form-label">Job ID</label>
                <input type="number" class="form-control" id="job_id" name="job_id" required>
            </div>

            <div class="mb-3">
                <label for="Technician_id" class="form-label">Technician ID</label>
                <input type="number" class="form-control" id="Technician_id" name="Technician_id" required>
            </div>

            <div class="mb-3">
                <label for="bid_amount" class="form-label">Bid Amount</label>
                <input type="text" class="form-control" id="bid_amount" name="bid_amount" required>
            </div>

            <div class="mb-3">
                <label for="bid_message" class="form-label">Bid Message</label>
                <textarea class="form-control" id="bid_message" name="bid_message" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="pending">Pending</option>
                    <option value="accepted">Accepted</option>
                    <option value="declined">Declined</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save Job Bid</button>
        </form>
    </div>
@endsection
