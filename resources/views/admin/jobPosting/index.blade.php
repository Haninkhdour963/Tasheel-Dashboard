@extends('layouts.master')

@section('title', 'JobPostings')

@section('content')
    <div class="container">
        <h1 class="mb-4">Job Postings</h1>

        <!-- Success message if any -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Link to create a new job posting -->
        <a href="{{ url('admin/jobPosting') }}" class="btn btn-primary mb-3">Add New Job Posting</a>

        <!-- Job Postings Table -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobPostings as $job)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->location }}</td>
                    <td>
                        <a href="{{ route('admin.job_postings.show', $job->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.job_postings.edit', $job->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.job_postings.destroy', $job->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this job posting?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
