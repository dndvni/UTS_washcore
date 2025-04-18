<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $table = 't_pelayanan'; // Nama tabel di database

    protected $primaryKey = 'pelayanan_id'; // Nama primary key (jika bukan "id")

    protected $fillable = [
        'jenis_pelayanan',
        'harga_pelayanan',
    ];
}
