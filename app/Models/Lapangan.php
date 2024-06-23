<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lapangan extends Model
{
    use HasFactory;

    protected $primarykey = 'id_lapangan';

    protected $fillable = [
        'nama_lapangan', 
        'harga',
        'keterangan',
        'foto',
    ];

    // public function pesanans()
    // {
    //     return $this->;HasMany(Pesanan::class);
    // }
}

