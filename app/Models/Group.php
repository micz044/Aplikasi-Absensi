<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Student()
    {
        return $this->hasOne(Student::class);
    }

    public function Classroom()
    {
        return $this->hasOne(Classroom::class);
    }
}
