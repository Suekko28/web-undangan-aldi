<?php

namespace App\Http\Controllers;

use App\Models\NamaUndangan;
use Illuminate\Http\Request;

class NamaUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NamaUndangan::orderBy('id', 'asc')->paginate(10);

        // Mengirimkan data ke view bersama dengan variabel
        return view('user.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('user.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_undangan' => 'required|string'
        ], [
            'nama_undangan.required' => 'Nama Undangan Wajib Diisi',
        ]);

        $nama_undangans = explode("\n", $request->nama_undangan);
        foreach ($nama_undangans as $key => $nama_undangan) {
            $nama_undangan = trim($nama_undangan);


            $data['undangan_alt1s_id'] = $request->id;
            NamaUndangan::create($data);
            return redirect()->route('nama-undangan-index', compact($data))->with('success', 'Berhasil menambahkan data');

        }


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
