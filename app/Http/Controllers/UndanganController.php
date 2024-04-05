<?php

namespace App\Http\Controllers;

use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        $data = UndanganAlt1::orderBy('id', 'desc')->paginate(10);
        return view('undangan-aldi.admin', compact('data'));
    }

    public function template()
    {
        return view('admin.template');
    }

}
