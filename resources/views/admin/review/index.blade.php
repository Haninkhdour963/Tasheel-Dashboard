{{-- resources/views/admin/reviews/index.blade.php --}}
@extends('layouts.master')

@section('content')
    <h1>Reviews</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ url('admin/reviews') }}" class="btn btn-primary">Create New Review</a>

    <table class="table mt-4">
        <thead>
        <tr>
            <th>Job</th>
            <th>Reviewer</th>
            <th>Rating</th>
            <th>Message</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td>{{ $review->jobPosting->title }}</td>
                <td>{{ $review->reviewer->name }}</td>
                <td>{{ $review->rate }}</td>
                <td>{{ $review->review_message }}</td>
                <td>{{ $review->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="{{ route('admin.reviews.edit', $review->review_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.reviews.destroy', $review->review_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
