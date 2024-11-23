<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobPostingFormRequest;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    /**
     * Display a listing of job postings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPostings = JobPosting::all(); // You can add filters or pagination as necessary.
        return view('admin.jobPosting.index', compact('jobPostings'));
    }

    /**
     * Show the form for creating a new job posting.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // You may need to pass data like categories or users if required.
    return view('admin.jobPosting.create');
    }

    /**
     * Store a newly created job posting in storage.
     *
     * @param  \App\Http\Requests\Admin\JobPostingFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobPostingFormRequest $request)
    {
        $data = $request->validated();
        JobPosting::create($data); // Automatically handles fillable fields due to $fillable in the model
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting created successfully.');
    }

    /**
     * Display the specified job posting.
     *
     * @param  int  $job_id
     * @return \Illuminate\Http\Response
     */
    public function show($job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        return view('admin.job_postings.show', compact('jobPosting'));
    }

    /**
     * Show the form for editing the specified job posting.
     *
     * @param  int  $job_id
     * @return \Illuminate\Http\Response
     */
    public function edit($job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        return view('admin.job_postings.edit', compact('jobPosting'));
    }

    /**
     * Update the specified job posting in storage.
     *
     * @param  \App\Http\Requests\Admin\JobPostingFormRequest  $request
     * @param  int  $job_id
     * @return \Illuminate\Http\Response
     */
    public function update(JobPostingFormRequest $request, $job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        $data = $request->validated();
        $jobPosting->update($data);
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting updated successfully.');
    }

    /**
     * Remove the specified job posting from storage.
     *
     * @param  int  $job_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        $jobPosting->delete(); // Soft delete due to SoftDeletes trait
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting deleted successfully.');
    }
}
