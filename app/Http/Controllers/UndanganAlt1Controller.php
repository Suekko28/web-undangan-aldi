<?php

namespace App\Http\Controllers;

use App\Http\Requests\UndanganAlt1FormRequest;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UndanganAlt1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data, termasuk yang telah dihapus secara lembut
        $data = UndanganAlt1::orderBy('id', 'asc')->withTrashed()->paginate(10);
        
        // Mengirimkan data ke view
        return view('undangan-aldi.admin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('undangan-aldi.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(UndanganAlt1FormRequest $request)
    {
        // Simpan gambar ke penyimpanan
        $banner_img = $request->file('banner_img');
        $foto_mempelai_laki = $request->file('foto_mempelai_laki');
        $foto_mempelai_perempuan = $request->file('foto_mempelai_perempuan');

        // Simpan jalur penyimpanan untuk gambar utama
        $banner_img_path = $banner_img->storeAs('public/images', $banner_img->hashName());
        $foto_mempelai_laki_path = $foto_mempelai_laki->storeAs('public/images', $foto_mempelai_laki->hashName());
        $foto_mempelai_perempuan_path = $foto_mempelai_perempuan->storeAs('public/images', $foto_mempelai_perempuan->hashName());

        // Memisahkan nama undangan yang dipisahkan oleh baris menjadi array
        $nama_undangans = explode("\n", $request->nama_undangan);

        // Buat entri baru untuk setiap nama undangan dengan ID yang berbeda
        foreach ($nama_undangans as $key => $nama_undangan) {
            $nama_undangan = trim($nama_undangan);
            $data = [
                'nama_undangan' => $nama_undangan,
                'id' => $key + 1,
                'banner_img' => $banner_img_path,
                'foto_mempelai_laki' => $foto_mempelai_laki_path,
                'nama_mempelai_laki' => $request->nama_mempelai_laki,
                'putra_dari_bpk' => $request->putra_dari_bpk,
                'putra_dari_ibu' => $request->putra_dari_ibu,
                'foto_mempelai_perempuan' => $foto_mempelai_perempuan_path,
                'nama_mempelai_perempuan' => $request->nama_mempelai_perempuan,
                'putri_dari_bpk' => $request->putri_dari_bpk,
                'putri_dari_ibu' => $request->putri_dari_ibu,
                'tgl_akad' => $request->tgl_akad,
                'alamat_akad' => $request->alamat_akad,
                'tgl_resepsi' => $request->tgl_resepsi,
                'alamat_resepsi' => $request->alamat_resepsi,
                'lokasi_gmaps' => $request->lokasi_gmaps,
                'caption' => $request->caption,
                'pertemuan' => $request->pertemuan,
                'pendekatan' => $request->pendekatan,
                'lamaran' => $request->lamaran,
                'pernikahan' => $request->pernikahan,
                'nama_rek1' => $request->nama_rek1,
                'no_rek1' => $request->no_rek1,
                'atas_nama1' => $request->atas_nama1,
                'nama_rek2' => $request->nama_rek2,
                'no_rek2' => $request->no_rek2,
                'atas_nama2' => $request->atas_nama2,
                'nama_rek3' => $request->nama_rek3,
                'no_rek3' => $request->no_rek3,
                'atas_nama3' => $request->atas_nama3,
                'alamat_tertera' => $request->alamat_tertera,
            ];

            // Periksa apakah file galeri diunggah sebelum menyimpannya
            foreach (range(1, 6) as $index) {
                $galeri_field = 'galeri_img' . $index;
                if ($request->hasFile($galeri_field)) {
                    $galeri_img = $request->file($galeri_field);
                    $galeri_img_path = $galeri_img->storeAs('public/images', $galeri_img->hashName());
                    $data[$galeri_field] = $galeri_img_path;
                } else {
                    // Jika file galeri tidak diunggah, set bidang galeri menjadi default
                    $data[$galeri_field] = 'default.jpg'; // Atur default.jpg sesuai kebutuhan Anda
                }
            }

            UndanganAlt1::create($data);
        }

        return redirect()->route('undangan-alternative1')->with('success', 'Data berhasil ditambahkan');
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
        $data = UndanganAlt1::find($id);
        return view('undangan-aldi.edit', [
            'data' => $data,
        ]);
    }


    public function update(UndanganAlt1FormRequest $request, string $id)
    {
        // Temukan data dengan ID yang diberikan
        $data = UndanganAlt1::findOrFail($id);
    
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validated();
    
        // Simpan jalur gambar lama
        $gambarFields = ['banner_img', 'foto_mempelai_laki', 'foto_mempelai_perempuan', 'galeri_img1', 'galeri_img2', 'galeri_img3', 'galeri_img4', 'galeri_img5', 'galeri_img6'];
        foreach ($gambarFields as $field) {
            $oldImagePaths[$field] = $data->$field;
        }
    
        // Update setiap gambar jika ada perubahan
        foreach ($gambarFields as $field) {
            if ($request->hasFile($field)) {
    
                // Upload gambar yang baru
                $image = $request->file($field);
                $imagePath = $image->storeAs('public/images', $image->hashName());
    
                // Update data dengan informasi gambar yang baru
                $data->$field = $imagePath;
            }
        }
    
        // Update data dengan informasi yang diperbarui
        $data->update([
            'nama_mempelai_laki' => $validatedData['nama_mempelai_laki'],
            'putra_dari_bpk' => $validatedData['putra_dari_bpk'],
            'putra_dari_ibu' => $validatedData['putra_dari_ibu'],
            'nama_mempelai_perempuan' => $validatedData['nama_mempelai_perempuan'],
            'putri_dari_bpk' => $validatedData['putri_dari_bpk'],
            'putri_dari_ibu' => $validatedData['putri_dari_ibu'],
            'tgl_akad' => $validatedData['tgl_akad'],
            'alamat_akad' => $validatedData['alamat_akad'],
            'tgl_resepsi' => $validatedData['tgl_resepsi'],
            'alamat_resepsi' => $validatedData['alamat_resepsi'],
            'lokasi_gmaps' => $validatedData['lokasi_gmaps'],
            'caption' => $validatedData['caption'],
            'pertemuan' => $validatedData['pertemuan'],
            'pendekatan' => $validatedData['pendekatan'],
            'lamaran' => $validatedData['lamaran'],
            'pernikahan' => $validatedData['pernikahan'],
            'nama_rek1' => $validatedData['nama_rek1'],
            'no_rek1' => $validatedData['no_rek1'],
            'atas_nama1' => $validatedData['atas_nama1'],
            'nama_rek2' => $validatedData['nama_rek2'],
            'no_rek2' => $validatedData['no_rek2'],
            'atas_nama2' => $validatedData['atas_nama2'],
            'nama_rek3' => $validatedData['nama_rek3'],
            'no_rek3' => $validatedData['no_rek3'],
            'atas_nama3' => $validatedData['atas_nama3'],
            'alamat_tertera' => $validatedData['alamat_tertera'],
        ]);
    
        return redirect()->route('undangan-alternative1')->with('success', 'Data berhasil diperbarui');
    }
            



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = UndanganAlt1::find($id)->delete();
        return redirect()->route('undangan-alternative1')->with('success', 'Data berhasil Dihapus');

    }
}
