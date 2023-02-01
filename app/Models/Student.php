<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
    public function Absen()
    {
        return $this->hasOne(Absen::class);
    }
}


