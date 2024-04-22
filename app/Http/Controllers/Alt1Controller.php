<?php

namespace App\Http\Controllers;

use App\Http\Requests\alt1FormRequest;
use App\Models\alt1model;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class Alt1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = alt1model::orderBy('id', 'desc')->get();
        return view('undangan-aldi.index', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $nama_undangan, Request $request)
    {

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(alt1FormRequest $request)
    {
        // Validasi request
        $validatedData = $request->validated();

        // Cari data undangan berdasarkan nama undangan
        $undangan = UndanganAlt1::where('nama_undangan', $validatedData['nama_undangan'])
            ->first();

        // Jika tidak ditemukan, buat baru
        if (!$undangan) {
            $undangan = new UndanganAlt1();
            $undangan->nama_undangan = $validatedData['nama_undangan'];
            // Atur properti lainnya sesuai kebutuhan
            $undangan->save();
        }

        // Simpan data alt1
        $alt1 = new Alt1Model();
        $alt1->id_alt1 = $undangan->id; // Menggunakan ID undangan yang baru dibuat atau yang sudah ada
        // Atur properti lainnya sesuai kebutuhan
        $alt1->save();

        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect()->route('undangan-alt1-index', [
            'alt1',
            'undangan'
        ])->with('success', 'Data berhasil disimpan');
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
