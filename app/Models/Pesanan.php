<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'id_lapangan', 
        'user_id', 
        'tgl_main', 
        'jam_mulai', 
        'jam_selesai', 
        'harga'
    ];

    // Define the relationships
    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class, 'id_lapangan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
