<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GEOIFair extends Model
{
    use HasFactory;

    protected $table = 'geoi_fair';

    protected $fillable = [
        'image',
        'title',
        'slug',
        'description'
    ];
}
