<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TechnicianProfileFormRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;  // You may add any permission logic here
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,user_id',  // Make sure the user exists
            'skills' => 'required|string',
            'hourly_rate' => 'required|numeric',
            'certifications' => 'nullable|string',
            'bio' => 'nullable|string',
            'location' => 'nullable|string',
            'available_from' => 'nullable|date',  // Ensure it's a valid date
        ];
    }
}
