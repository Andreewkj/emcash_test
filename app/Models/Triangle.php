<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
    use HasFactory;

    protected $fillable = [
        'side_1',
        'side_2',
        'side_3',
        'area'
    ];
}
