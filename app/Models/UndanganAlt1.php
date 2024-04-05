<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganAlt1 extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'banner_img',
        'foto_mempelai_laki',
        'nama_mempelai_laki',
        'putra_dari_bpk',
        'foto_mempelai_perempuan',
        'nama_mempelai_perempuan',
        'putri_dari_bpk',
        'tgl_akad',
        'alamat_akad',
        'tgl_resepsi',
        'alamat_resepsi',
        'lokasi_gmaps',
        'caption',
        'galeri_img1',
        'galeri_img2',
        'galeri_img3',
        'galeri_img4',
        'galeri_img5',
        'galeri_img6',
        'pertemuan',
        'pendekatan',
        'lamaran',
        'pernikahan',
        'nama_rek1',
        'no_rek1',
        'nama_rek2',
        'no_rek2',
        'nama_rek3',
        'no_rek3',
        'alamat_tertera',
    ];
}