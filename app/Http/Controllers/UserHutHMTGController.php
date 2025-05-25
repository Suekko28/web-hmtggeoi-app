<?php

namespace App\Http\Controllers;

use App\Models\HutHMTG;
use Illuminate\Http\Request;

class UserHutHMTGController extends Controller
{
    public function index()
    {
        $data = HutHMTG::orderBy('id', 'desc')->paginate(6);

        return view('user-hut.index', [
            'data' => $data,
        ]);
    }

    public function show($slug)
    {
        $data = HutHMTG::where('slug', $slug)
            ->firstOrFail();

        $lastUpdate = HutHMTG::orderBy('id', 'desc')->paginate(3);

        return view('user-hut.show', [
            'data' => $data,
            'lastUpdate' => $lastUpdate
        ]);
    }

}
