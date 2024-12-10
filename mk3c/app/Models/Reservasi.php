<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasis';

    protected $fillable = [
        'nama',
        'tanggal',
        'jam',
        'jenis_reservasi',
        'catatan',
    ];

    protected $casts = [
        'tanggal' => 'date',       // Format date
        'jam' => 'string',         // Ubah dari 'time' ke 'string'
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
