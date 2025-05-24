<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumniHMTGFormRequest;
use App\Models\AlumniHMTG;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AlumniHMTGController extends Controller
{
    public function index()
    {
        $data = AlumniHMTG::orderBy('id', 'desc')->paginate(10);

        return view('admin-alumni.index', [
            'data' => $data,
        ]);
    }

    public function store(AlumniHMTGFormRequest $request)
    {

        $data = $request->all();

        AlumniHMTG::create($data);

        return redirect()->route('alumni.index')->with('success', 'Berhasil menambahkan data');



    }


    public function update(AlumniHMTGFormRequest $request, $id)
    {
        $alumni = AlumniHMTG::findOrFail($id);

        $data = $request->all();

        $alumni->update($data);

        return redirect()->route('alumni.index')->with('success', 'Berhasil menambahkan data');


    }

    public function destroy($id)
    {
        $data = AlumniHMTG::find($id);

        $data->delete();

        return redirect()->route('alumni.index')->with('success', 'Berhasil menambahkan data');

    }
}
