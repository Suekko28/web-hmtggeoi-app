<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPAM extends Model
{
    use HasFactory;

    protected $table = 'ppam';

    protected $fillable = [
        'image',
        'title',
        'slug',
        'description'
    ];
}
