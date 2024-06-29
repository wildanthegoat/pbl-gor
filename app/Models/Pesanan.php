<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $table = 'pesanans';
    protected $primaryKey = 'id_pesanan';
    protected $fillable = [
        'id_lapangan', 
        'id_user', 
        'tanggal', 
        'jam_mulai', 
        'jam_selesai', 
        'total_bayar'
    ];

    // Define the relationships
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pesanan');
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class, 'id_lapangan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
