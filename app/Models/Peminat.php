<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminat extends Model
{
    use HasFactory;

    protected $table = 'peminat';
    protected $primaryKey = 'id_peminat';
    protected $fillable = [
        'nama_lengkap',
        'asal_sekolah',
        'alamat',
        'no_hp',
        'id_user',
        'id_pbdp',
    ];

    public function jalur()
    {
        return $this->belongsTo(Pbdp::class, 'id_pbdp', 'id_pbdp');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
