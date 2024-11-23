@extends('layouts.master')

@section('title', 'Job Postings')

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
        <a href="{{ route('admin/jobPostings') }}" class="btn btn-primary mb-3">Add New Job Posting</a>

        <!-- Job Postings Table -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Job Title</th>
                <th>Location</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobPostings as $jobPosting)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jobPosting->title }}</td>
                    <td>{{ $jobPosting->location }}</td>
                    <td>{{ Str::limit($jobPosting->description, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.job_postings.edit', $jobPosting->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.job_postings.destroy', $jobPosting->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
