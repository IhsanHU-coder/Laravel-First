<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $with = ['classroom'];

    public function classroom(){
        return $this->belongsTo(ClassRoom::class, 'classroom_id');
    }
}
