<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrienteeringNasional extends Model
{
    use HasFactory;

    protected $table = 'orienteering_nasional';

    protected $fillable = [
        'image',
        'title',
        'slug',
        'description'
    ];

}
