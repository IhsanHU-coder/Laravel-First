<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'classroom_id',
        'email',
        'address',
    ];

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class, 'classroom_id');
    }
}

