<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    public function Status()
    {
        return $this->hasOne(Status::class);
    }

    public function Classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
