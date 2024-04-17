<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class alt1model extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
    ];

    public function UndanganAlt1(): HasOne {
        return $this->hasOne(UndanganAlt1::class, 'id_alt1', 'id');
    }
}
