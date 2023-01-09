<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Absen;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function Absen()
    {
        return $this->belongsTo(Absen::class);
    }
}

