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
        $data = UndanganAlt1::where('nama_undangan', $nama_undangan)->firstOrFail();

        return view('undangan-aldi.create', [
            'nama_undangan' => $nama_undangan,
            'data' => $data,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        $data['id_alt1'] = $request->id;
        alt1model::create($data);
        return redirect()->route('undangan-aldi.index', ['nama_undangan' => $request->nama_undangan]);
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
