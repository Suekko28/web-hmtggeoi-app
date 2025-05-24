<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrienteeringNasionalFormRequest;
use App\Models\OrienteeringNasional;
use Illuminate\Http\Request;
use Storage;
use Str;

class OrienteeringNasionalController extends Controller
{
    public function index()
    {
        $data = OrienteeringNasional::orderBy('id', 'desc')->paginate(10);

        return view('admin-orienteering.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-orienteering.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrienteeringNasionalFormRequest $request)
    {
        $data = $request->all();
        $image = $request->file('image');
        $filename = time() . '_' . $image->hashName();
        $image->storeAs('public/orienteering', $filename);

        $data['image'] = $filename;
        $data['slug'] = Str::slug($data['title']);


        OrienteeringNasional::create($data);

        return redirect()->route('orienteering-nasional.index')->with('success', 'Data berhasil ditambahkan');

    }

    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'upload' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Store the uploaded file
        $path = $request->file('upload')->store('orienteering-post', 'public');
        $url = Storage::url($path);

        // Return the response
        return response()->json(['url' => $url]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = OrienteeringNasional::findOrFail($id);

        return view('admin-orienteering.edit', [
            'data' => $data
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(OrienteeringNasionalFormRequest $request, string $id)
    {
        $update = OrienteeringNasional::findOrFail($id); // Pakai findOrFail agar error otomatis jika data tidak ditemukan

        $data = $request->validated(); // Gunakan data tervalidasi

        $data['slug'] = Str::slug($data['title']);


        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($update->image) {
                Storage::disk('public')->delete('orienteering/' . $update->image);
            }

            // Simpan gambar baru
            $image = $request->file('image');
            $filename = time() . '_' . $image->hashName();
            $image->storeAs('public/orienteering', $filename);

            $data['image'] = $filename;
        } else {
            // Jika tidak upload gambar baru, jangan ubah field image
            unset($data['image']);
        }

        // Update data
        $update->update($data);

        return redirect()->route('orienteering-nasional.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = OrienteeringNasional::findOrFail($id);

        // Check if there is an image to delete
        if ($data->image) {
            $imagePath = 'orienteering/' . basename($data->image);
            Storage::disk('public')->delete($imagePath);
        }

        // Check if there are images in the deskripsi to delete
        if ($data->deskripsi) {
            // Use a regex to find all image URLs in the deskripsi
            preg_match_all('/<img[^>]+src="([^">]+)"/', $data->deskripsi, $matches);

            if (!empty($matches[1])) {
                foreach ($matches[1] as $imageUrl) {
                    // Extract the filename from the URL
                    $imageName = basename($imageUrl);
                    $imagePath = 'orienteering-post/' . $imageName;

                    // Delete the image if it exists
                    Storage::disk('public')->delete($imagePath);
                }
            }
        }

        // Delete the blog entry
        $data->delete();

        return redirect()->route('orienteering-nasional.index')->with('success', 'Berhasil Menghapus Data');
    }

}
