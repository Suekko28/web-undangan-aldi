<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NamaUndangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_undangan',
    ];

    public function UndanganAlt1() : HasMany {
        return $this->hasMany(UndanganAlt1::class, 'id', 'id');
    }
}
