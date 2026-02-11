<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
    use HasFactory;

    protected $table = 'kepala_sekolah';
    protected $primaryKey = 'id_kepala_sekolah';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nip_nuptk',
        'foto',
        'tanggal_lahir',
        'jenis_kelamin',
        'sambutan', 
        'id_user',
    ];

        public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}