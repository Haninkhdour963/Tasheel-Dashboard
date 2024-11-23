<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobPostingFormRequest;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function index()
    {
        $jobPostings = JobPosting::all();
        return view('admin.jobPosting.index', compact('jobPostings'));
    }

    public function create()
    {
        return view('admin.jobPosting.create');
    }

    public function store(JobPostingFormRequest $request)
    {
        $data = $request->validated();
        JobPosting::create($data);
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting created successfully.');
    }

    public function show($job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        return view('admin.job_postings.show', compact('jobPosting'));
    }

    public function edit($job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        return view('admin.job_postings.edit', compact('jobPosting'));
    }

    public function update(JobPostingFormRequest $request, $job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        $data = $request->validated();
        $jobPosting->update($data);
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting updated successfully.');
    }

    public function destroy($job_id)
    {
        $jobPosting = JobPosting::findOrFail($job_id);
        $jobPosting->delete();
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting deleted successfully.');
    }

    public function restore($job_id)
    {
        $jobPosting = JobPosting::withTrashed()->findOrFail($job_id);
        $jobPosting->restore();
        return redirect()->route('admin.job_postings.index')->with('success', 'Job Posting restored successfully.');
    }
}
