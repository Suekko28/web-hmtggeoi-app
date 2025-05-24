<?php

namespace App\Http\Controllers;

use App\Models\AlumniHMTG;
use App\Models\GEOIFair;
use App\Models\HutHMTG;
use App\Models\OrienteeringNasional;
use App\Models\PPAM;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataPPAM = PPAM::get()->count();

        $dataOrienteeringNasional = OrienteeringNasional::get()->count();

        $dataGEOIFair = GEOIFair::get()->count();

        $dataHutHMTG = HutHMTG::get()->count();

        $dataAlumni = AlumniHMTG::get()->count();

        return view('admin-dashboard.index', [
            'dataPPAM' => $dataPPAM,
            'dataOrienteeringNasional' => $dataOrienteeringNasional,
            'dataGEOIFair' => $dataGEOIFair,
            'dataHutHMTG' => $dataHutHMTG,
            'dataAlumni' => $dataAlumni
        ]);
    }
}
