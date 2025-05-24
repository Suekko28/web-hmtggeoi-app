<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniHMTG extends Model
{
    use HasFactory;

    protected $table = 'alumni_hmtg';

    protected $fillable = [
        'name',
        'npm',
        'phone',
        'year',
    ];
}
