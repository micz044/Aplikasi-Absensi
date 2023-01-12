<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Student()
    {
        return $this->hasOne(Student::class);
    }

    public function Group()
    {
        return $this->belongsTo(Group::class, 'classroom_id');
    }
}

