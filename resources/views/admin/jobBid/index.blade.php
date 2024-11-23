@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Job Bids</h1>
        <a href="{{url('admin/job-bid') }}" class="btn btn-primary mb-3">Add New Job Bid</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Job ID</th>
                <th>Technician ID</th>
                <th>Bid Amount</th>
                <th>Bid Message</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($jobBids as $jobBid)
                <tr>
                    <td>{{ $jobBid->job_id }}</td>
                    <td>{{ $jobBid->Technician_id }}</td>
                    <td>{{ $jobBid->bid_amount }}</td>
                    <td>{{ $jobBid->bid_message }}</td>
                    <td>{{ $jobBid->status }}</td>
                    <td>
                        <a href="{{ route('admin.job-bids.edit', $jobBid->bid_id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.job-bids.destroy', $jobBid->bid_id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
