<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReviewFormRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Display a listing of the reviews
    public function index()
    {
        $reviews = Review::with(['jobPosting', 'reviewer'])->get(); // Eager load relationships
        return view('admin.review.index', compact('reviews'));
    }

    // Show the form for creating a new review

    // Store a newly created review in storage
    public function store(ReviewFormRequest $request)
    {
        $review = Review::create($request->validated()); // Validate and store data
        return redirect()->route('admin.reviews.index')->with('success', 'Review created successfully');
    }

    // Show the form for editing the specified review
    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    // Update the specified review in storage
    public function update(ReviewFormRequest $request, Review $review)
    {
        $review->update($request->validated());
        return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully');
    }

    // Remove the specified review from storage
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully');
    }
}
