<?php

namespace App\Http\Controllers;

use App\Exports\AlumniExport;
use App\Http\Requests\AlumniHMTGFormRequest;
use App\Imports\AlumniImport;
use App\Models\AlumniHMTG;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Storage;

class AlumniHMTGController extends Controller
{
    public function index()
    {
        $data = AlumniHMTG::orderBy('id', 'desc')->get();

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

    public function alumniImport(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // Membuat nama file unik
        $nama_file = $file->hashName();

        // Simpan sementara file
        $path = $file->storeAs('public/excel/', $nama_file);

        // Import file menggunakan facade Excel
        $import = Excel::import(new AlumniImport, storage_path('app/public/excel/' . $nama_file));

        // Hapus file setelah import
        Storage::delete($path);

        if ($import) {
            return redirect()->route('alumni.index')->with(['success' => 'Data berhasil di import']);
        } else {
            return redirect()->route('alumni.index')->with(['error' => 'Data gagal di import']);
        }
    }

    public function alumniExport ()
    {
        return Excel::download(new AlumniExport, 'Alumni-HTMGGEOI.xlsx');
    }
}
