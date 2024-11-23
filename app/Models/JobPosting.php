<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPosting extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'job_id';
    protected $fillable = ['client_id', 'title', 'description', 'category_id', 'location', 'budget', 'status'];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function jobBids()
    {
        return $this->hasMany(JobBid::class, 'job_id', 'job_id');
    }

    public function escrowPayments()
    {
        return $this->hasMany(EscrowPayment::class, 'job_id', 'job_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'job_id', 'job_id');
    }

    public function disputes()
    {
        return $this->hasMany(Dispute::class, 'job_id', 'job_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'job_id', 'job_id');
    }
}
