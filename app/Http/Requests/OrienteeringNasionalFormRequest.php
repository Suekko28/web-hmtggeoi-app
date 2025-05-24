<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrienteeringNasionalFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi yang berlaku untuk request ini.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ];

        // Jika ini adalah request untuk membuat data baru (store), maka gambar wajib di-upload
        if ($method === 'POST') {
            $rules['image'] = ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'];
        } else {
            // Jika ini adalah request untuk update, gambar bersifat opsional (nullable)
            $rules['image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'];
        }

        return $rules;
    }

    /**
     * Pesan error kustom dalam bahasa Indonesia untuk validasi.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'image.required' => 'Gambar wajib diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat JPG, JPEG, atau PNG.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'title.required' => 'Judul wajib diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',

            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
        ];
    }
}
