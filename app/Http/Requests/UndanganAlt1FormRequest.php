<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UndanganAlt1FormRequest extends FormRequest
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
            'banner_img' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'foto_mempelai_laki' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'nama_mempelai_laki' => ['', 'string', 'max:100'],
            'putra_dari_bpk' => ['', 'string', 'max:100'],
            'foto_mempelai_perempuan' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'nama_mempelai_perempuan' => ['', 'string', 'max:100'],
            'putri_dari_bpk' => ['', 'string', 'max:100'],
            'tgl_akad' => ['', 'date'],
            'alamat_akad' => ['', 'string'],
            'tgl_resepsi' => ['', 'date'],
            'alamat_resepsi' => ['', 'string'],
            'lokasi_gmaps' => ['', 'string'],
            'caption' => ['', 'string', 'max:100'],
            'galeri_img1' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'galeri_img2' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'galeri_img3' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'galeri_img4' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'galeri_img5' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'galeri_img6' => ['', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'pertemuan' => ['', 'string'],
            'pendekatan' => ['', 'string'],
            'lamaran' => ['', 'string'],
            'pernikahan' => ['', 'string'],
            'nama_rek1' => ['', 'string', 'max:100'],
            'no_rek1' => ['', 'integer'],
            'nama_rek2' => ['', 'string', 'max:100'],
            'no_rek2' => ['', 'integer'],
            'nama_rek3' => ['', 'string', 'max:100'],
            'no_rek3' => ['', 'integer'],
            'alamat_tertera' => ['', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            '' => 'Field :attribute wajib diisi.',
            'image' => 'Field :attribute harus berupa file gambar.',
            'mimes' => 'Field :attribute harus dalam format jpeg, png, atau jpg.',
            'max' => 'Ukuran field :attribute tidak boleh melebihi :max kb.',
            'date' => 'Field :attribute harus dalam format tanggal yang valid.',
            'string' => 'Field :attribute harus berupa teks.',
            'integer' => 'Field :attribute harus berupa angka.',
        ];
    }
}
