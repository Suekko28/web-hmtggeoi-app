<?php

namespace App\Http\Controllers;

use App\Models\PPAM;
use Illuminate\Http\Request;

class UserPPAMController extends Controller
{
    public function index()
    {
        $data = PPAM::orderBy('id', 'desc')->paginate(6);

        return view('user-p-pam.index', [
            'data' => $data,
        ]);
    }

    public function show($slug)
    {
        $data = PPAM::where('slug', $slug)
            ->firstOrFail();

        $lastUpdate = PPAM::orderBy('id', 'desc')->paginate(3);

        return view('user-p-pam.show', [
            'data' => $data,
            'lastUpdate' => $lastUpdate
        ]);
    }
}
