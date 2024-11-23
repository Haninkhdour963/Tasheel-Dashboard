@extends('layouts.master')

@section('title', 'Add Job Posting')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Add New Job Posting</h4>
            </div>
            <div class="card-body">

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

                <!-- Job Posting Form -->
                <form action="{{ route('admin.job_postings.store') }}" method="POST">
                    @csrf

                    <!-- Job Title -->
                    <div class="form-group mb-3">
                        <label for="title">Job Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Budget -->
                    <div class="form-group mb-3">
                        <label for="budget">Budget</label>
                        <input type="text" name="budget" id="budget" class="form-control @error('budget') is-invalid @enderror" value="{{ old('budget') }}" required>
                        @error('budget')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <!-- Location -->
                    <div class="form-group mb-3">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" required>
                        @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Job Description -->
                    <div class="form-group mb-3">
                        <label for="description">Job Description</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Date (If Needed) -->
                    {{-- <div class="form-group">
                        <label for="posted_at">Available From</label>
                        <input type="date" name="posted_at" id="posted_at" class="form-control @error('posted_at') is-invalid @enderror" value="{{ old('posted_at') }}" required>
                        @error('posted_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Save Job Posting</button>
                </form>

            </div>
        </div>
    </div>
@endsection
