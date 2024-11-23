<!-- resources/views/admin/job-postings/create.blade.php -->

@extends('layouts.master')

@section('title', 'Add Job Posting')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Add New Job Posting</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/add-jobPosting') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="client_id" class="form-label">Client ID</label>
                        <input type="number" class="form-control" id="client_id" name="client_id" required>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Job Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>

{{--                    <div class="mb-3">--}}
{{--                        <label for="category_id" class="form-label">Category</label>--}}
{{--                        <select class="form-control" id="category_id" name="category_id" required>--}}
{{--                            <option value="">Select a Category</option>--}}
{{--                            @foreach ($categories as $category)--}}
{{--                                <option value="{{ $category->category_id }}">{{ $category->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <div class="mb-3">
                        <label for="budget" class="form-label">Budget</label>
                        <input type="number" step="0.01" class="form-control" id="budget" name="budget" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending">Pending</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="posted_at" class="form-label">Posted At</label>
                        <input type="datetime-local" class="form-control" id="posted_at" name="posted_at" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Save Job Posting</button>
                </form>
            </div>
        </div>
    </div>
@endsection
