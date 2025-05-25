<?php

namespace App\Http\Controllers;

use App\Models\OrienteeringNasional;
use Illuminate\Http\Request;

class UserOrienteeringNasionalController extends Controller
{
    public function index()
    {
        $data = OrienteeringNasional::orderBy('id', 'desc')->paginate(6);

        return view('user-orienteering.index', [
            'data' => $data,
        ]);
    }

    public function show($slug)
    {
        $data = OrienteeringNasional::where('slug', $slug)
            ->firstOrFail();

        $lastUpdate = OrienteeringNasional::orderBy('id', 'desc')->paginate(3);

        return view('user-orienteering.show', [
            'data' => $data,
            'lastUpdate' => $lastUpdate
        ]);
    }

}
