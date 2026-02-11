<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $primaryKey = 'id_guru';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nip_nuptk',
        'mata_pelajaran',
        'foto',
        'tanggal_lahir',
        'tanggal_masuk',
        'jenis_kelamin',
        'id_user',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
