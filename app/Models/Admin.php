<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['user_id', 'additional_info'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
