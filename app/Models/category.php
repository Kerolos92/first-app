<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    // write by me
    protected $fillable = [
        'name', 'img', 'desc', 'created_at'
    ];
}
