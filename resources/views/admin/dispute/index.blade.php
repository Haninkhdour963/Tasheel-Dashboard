@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>All Disputes</h1>
        <a href="{{ url('admin/add-dispute') }}" class="btn btn-primary mb-3">Add New Dispute</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Job ID</th>
                <th>Client ID</th>
                <th>Technician ID</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($disputes as $dispute)
                <tr>
                    <td>{{ $dispute->dispute_id }}</td>
                    <td>{{ $dispute->job_id }}</td>
                    <td>{{ $dispute->client_id }}</td>
                    <td>{{ $dispute->technician_id }}</td>
                    <td>{{ $dispute->reason }}</td>
                    <td>{{ ucfirst($dispute->status) }}</td>
                    <td>
                        <a href="{{ url('edit-dispute/' . $dispute->dispute_id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('delete-dispute/' . $dispute->dispute_id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
