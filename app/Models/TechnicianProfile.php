<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnicianProfile extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'technician_profiles';
    protected $primaryKey = 'Technician_id';
    protected $fillable = ['user_id', 'skills', 'hourly_rate', 'certifications', 'bio', 'location', 'available_from'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function jobBids()
    {
        return $this->hasMany(JobBid::class, 'Technician_id', 'Technician_id');
    }
}
