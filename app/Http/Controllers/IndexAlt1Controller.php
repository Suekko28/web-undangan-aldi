<?php

namespace App\Http\Controllers;

use App\Http\Requests\alt1FormRequest;
use App\Models\alt1model;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class IndexAlt1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('undangan-aldi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(alt1FormRequest $request)
    {
        $data = $request->validated(); // Mendapatkan data yang sudah divalidasi dari form
        alt1model::create($data); // Simpan data ke dalam database
        return redirect()->route('undangan-alt1-index', [
            'nama' => $data['nama'],
            'ucapan' => $data['ucapan'],
        ])->with('success', 'Data berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $nama_mempelai_laki, string $nama_mempelai_perempuan)
    {
        $data = UndanganAlt1::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->firstOrFail();
        return view('undangan-aldi.index', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan'));
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

    public function showDetail(string $nama_mempelai_laki, string $nama_mempelai_perempuan, string $nama_undangan)
    {
        $data = UndanganAlt1::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->whereHas('namaUndangan', function ($query) use ($nama_undangan) {
                $query->where('nama_undangan', $nama_undangan);
            })
            ->firstOrFail();

        return view('undangan-aldi.index', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan', 'nama_undangan'));
    }
}
