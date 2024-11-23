@extends('layouts.master')

@section('title', 'Edit Job Posting')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Job Posting</h1>

        <!-- Display validation errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Job Posting Edit Form -->
        <form action="{{ route('admin.job_postings.update', $jobPosting->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $jobPosting->title) }}" required>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $jobPosting->location) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Job Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $jobPosting->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Job Posting</button>
        </form>
    </div>
@endsection
