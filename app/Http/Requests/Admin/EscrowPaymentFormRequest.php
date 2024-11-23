<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EscrowPaymentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Update authorization logic as needed
    }

    public function rules()
    {
        return [
            'job_id' => 'required|exists:job_postings,job_id',
            'client_id' => 'required|exists:users,user_id',
            'technician_id' => 'required|exists:users,user_id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:hold,completed,refunded',
        ];
    }
}
