<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReviewFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Adjust based on your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'job_id' => 'required|exists:job_postings,job_id',
            'reviewer_id' => 'required|exists:users,user_id',
            'rate' => 'required|integer|min:1|max:5',
            'review_message' => 'nullable|string|max:1000',
        ];
    }
}
