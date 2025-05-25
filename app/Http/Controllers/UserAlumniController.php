<?php

namespace App\Http\Controllers;

use App\Models\AlumniHMTG;
use Illuminate\Http\Request;

class UserAlumniController extends Controller
{
    public function index()
    {
        $data = AlumniHMTG::orderBy('id', 'desc')->paginate(50);

        return view('user-alumni.index', [
            'data' => $data,
        ]);
    }
}
