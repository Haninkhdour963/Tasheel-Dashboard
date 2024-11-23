<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobBid extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'bid_id';
    protected $fillable = ['job_id', 'Technician_id', 'bid_amount', 'bid_message', 'status'];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'job_id', 'job_id');
    }

    public function technicianProfile()
    {
        return $this->belongsTo(TechnicianProfile::class, 'Technician_id', 'Technician_id');
    }
}
