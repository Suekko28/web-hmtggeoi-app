<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutHMTG extends Model
{
    use HasFactory;

    protected $table = 'hut_hmtg';

    protected $fillable = [
        'image',
        'title',
        'slug',
        'description'
    ];
}
