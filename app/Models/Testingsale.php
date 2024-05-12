<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testingsale extends Model
{
    use HasFactory;
    protected $fillable = [
        'programmeC',
        'likeC'
    ];
}
