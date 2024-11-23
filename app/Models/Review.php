<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'review_id';
    protected $fillable = ['job_id', 'reviewer_id', 'rate', 'review_message'];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'job_id', 'job_id');
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id', 'user_id');
    }
}
