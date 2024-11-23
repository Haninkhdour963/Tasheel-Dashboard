<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JobBidFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Assuming only admins can create or update bids. Adjust this based on your use case.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'job_id' => 'required|exists:job_postings,job_id',
            'Technician_id' => 'required|exists:technician_profiles,Technician_id',
            'bid_amount' => 'required|numeric|min:0',
            'bid_message' => 'nullable|string|max:1000',
            'status' => 'required|in:pending,accepted,declined',
        ];
    }
}
