<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DisputeFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Allow all users for now
    }

    public function rules()
    {
        return [
            'job_id' => 'required|exists:job_postings,job_id',
            'client_id' => 'required|exists:users,user_id',
            'technician_id' => 'required|exists:users,user_id',
            'reason' => 'required|string|max:255',
            'status' => 'required|in:open,resolved,closed',
            'resolution' => 'nullable|string|max:255',
            'created_at' => 'nullable|date',
        ];
    }
}
