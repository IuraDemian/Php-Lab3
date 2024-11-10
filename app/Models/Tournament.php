<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code', 'full_name', 'gender', 'age', 'country', 'score1', 'score2', 'score3'
    ];
}
