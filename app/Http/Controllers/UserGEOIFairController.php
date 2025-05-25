<?php

namespace App\Http\Controllers;

use App\Models\GEOIFair;
use Illuminate\Http\Request;

class UserGEOIFairController extends Controller
{
    public function index()
    {
        $data = GEOIFair::orderBy('id', 'desc')->paginate(6);

        return view('user-geoi.index', [
            'data' => $data,
        ]);
    }

    public function show($slug)
    {
        $data = GEOIFair::where('slug', $slug)
            ->firstOrFail();

        $lastUpdate = GEOIFair::orderBy('id', 'desc')->paginate(3);

        return view('user-geoi.show', [
            'data' => $data,
            'lastUpdate' => $lastUpdate
        ]);
    }

}
