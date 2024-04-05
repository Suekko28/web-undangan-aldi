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
}
