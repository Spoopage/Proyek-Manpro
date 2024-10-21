<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wali;
use App\Models\Pengasuh;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'anak';

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'tgl_masuk',
    ];

    // Relasi ke tabel Wali
    public function wali()
    {
        return $this->belongsTo(Wali::class, 'id_wali');
    }

    // Relasi ke tabel Pengasuh
    public function pengasuh()
    {
        return $this->belongsTo(Pengasuh::class, 'id_pengasuh');
    }
}
