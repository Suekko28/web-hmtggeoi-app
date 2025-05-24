<?php

namespace App\Http\Controllers;

use App\Models\PPAM;
use Illuminate\Http\Request;

class UserPPAMController extends Controller
{
    public function show()
    {
        $data = PPAM::orderBy('id', 'desc')->paginate(1);

        return view('user-p-pam.show', [
            'data' => $data,
        ]);
    }
}
