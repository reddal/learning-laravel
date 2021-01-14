<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    protected $table = 'song';

    protected $fillable =[
        'id',
        'name',
        'dur',
        'path',
        'user_id',
    ];

    use HasFactory;
}
