<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rectangle extends Model
{
    use HasFactory;

    protected $fillable = [
        'side_1',
        'side_2',
        'side_3',
        'side_4',
        'area'
    ];
}
