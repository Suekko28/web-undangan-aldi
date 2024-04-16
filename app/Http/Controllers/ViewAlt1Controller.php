<?php

namespace App\Http\Controllers;

use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class ViewAlt1Controller extends Controller
{
    public function index()
    {
        $data = UndanganAlt1::orderBy('id', 'desc')->paginate(10);
        return view('admin.view-alt1', compact('data'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nama_undangan)
    {
        dd($nama_undangan);
        $data = UndanganAlt1::where('nama_undangan', $nama_undangan)->firstOrFail();
        return view('undangan-aldi.home', compact('data'));
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


