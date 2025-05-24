<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniHMTGFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'npm' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'year' => ['required', 'integer']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama maksimal terdiri dari 255 karakter.',

            'npm.required' => 'Nomor telepon wajib diisi.',
            'npm.max' => 'NPM maksimal terdiri dari 255 karakter.',

            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.max' => 'Nomor telepon maksimal terdiri dari 255 karakter.',

            'year.required' => 'Tahun lulus wajib diisi.',
            'year.integer' => 'Tahun lulus harus berupa angka.',
        ];
    }

}
