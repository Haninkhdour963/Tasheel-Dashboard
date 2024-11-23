<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $primaryKey = 'contact_id';
    protected $fillable = ['job_id', 'client_id', 'Technician_id', 'name', 'email', 'subject', 'message'];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'job_id', 'job_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id', 'user_id');
    }

    public function technician()
    {
        return $this->belongsTo(User::class, 'Technician_id', 'user_id');
    }
}
