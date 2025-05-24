<?php

namespace App\Http\Controllers;

use App\Http\Requests\HutHMTGFormRequest;
use App\Models\HutHMTG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class HutHMTGController extends Controller
{
    public function index()
    {
        $data = HutHMTG::orderBy('id', 'desc')->paginate(10);

        return view('admin-hut.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-hut.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HutHMTGFormRequest $request)
    {
        $data = $request->all();
        $image = $request->file('image');
        $filename = time() . '_' . $image->hashName();
        $image->storeAs('public/hut', $filename);

        $data['image'] = $filename;
        $data['slug'] = Str::slug($data['title']);


        HutHMTG::create($data);

        return redirect()->route('hut-hmtg.index')->with('success', 'Data berhasil ditambahkan');

    }

    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'upload' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Store the uploaded file
        $path = $request->file('upload')->store('hut-post', 'public');
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
        $data = HutHMTG::findOrFail($id);

        return view('admin-hut.edit', [
            'data' => $data
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(HutHMTGFormRequest $request, string $id)
    {
        $update = HutHMTG::findOrFail($id); // Pakai findOrFail agar error otomatis jika data tidak ditemukan

        $data = $request->validated(); // Gunakan data tervalidasi

        $data['slug'] = Str::slug($data['title']);


        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($update->image) {
                Storage::disk('public')->delete('hut/' . $update->image);
            }

            // Simpan gambar baru
            $image = $request->file('image');
            $filename = time() . '_' . $image->hashName();
            $image->storeAs('public/hut', $filename);

            $data['image'] = $filename;
        } else {
            // Jika tidak upload gambar baru, jangan ubah field image
            unset($data['image']);
        }

        // Update data
        $update->update($data);

        return redirect()->route('hut-hmtg.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = HutHMTG::findOrFail($id);

        // Check if there is an image to delete
        if ($data->image) {
            $imagePath = 'hut/' . basename($data->image);
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
                    $imagePath = 'hut-post/' . $imageName;

                    // Delete the image if it exists
                    Storage::disk('public')->delete($imagePath);
                }
            }
        }

        // Delete the blog entry
        $data->delete();

        return redirect()->route('hut-hmtg.index')->with('success', 'Berhasil Menghapus Data');
    }

}
