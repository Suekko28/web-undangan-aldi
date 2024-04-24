<?php

namespace App\Http\Controllers;

use App\Models\NamaUndangan;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class NamaUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($undanganAlt1Id)
    {
        $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);
        $namaUndangans = $undanganAlt1->NamaUndangan()->paginate(10);
        return view('user.index', compact('namaUndangans', 'undanganAlt1'));
    }




    public function create($undanganAlt1Id)
    {
        $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);
        return view('user.create', compact('undanganAlt1', 'undanganAlt1Id'));
    }




    public function store(Request $request, $undanganAlt1Id)
    {
        // Mendapatkan instance UndanganAlt1 berdasarkan ID
        $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);

        // Memecah nama undangan menjadi array
        $nama_undangans = explode("\n", $request->nama_undangan);

        foreach ($nama_undangans as $nama_undangan) {
            $nama_undangan = trim($nama_undangan);

            $data = [
                'nama_undangan' => $nama_undangan,
            ];

            // Buat instance NamaUndangan
            $namaUndangan = new NamaUndangan($data);

            // Simpan model NamaUndangan terkait dengan UndanganAlt1
            $undanganAlt1->namaUndangan()->save($namaUndangan);
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('nama-undangan-list', $undanganAlt1Id)->with('success', 'Berhasil menambahkan data');
    }






    public function show($undanganAlt1Id, $id)
    {
        $namaUndangan = NamaUndangan::findOrFail($id);
        return view('user.show', compact('namaUndangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
