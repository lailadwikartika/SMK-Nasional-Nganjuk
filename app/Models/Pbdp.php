<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbdp extends Model
{
    use HasFactory;

    protected $table = 'pbdp';
    protected $primaryKey = 'id_pbdp';

    public $timestamps = false;

    protected $fillable = [
        'nama_jalur',
        'persyaratan_khusus', 
        'tanggal_buka',
        'tanggal_tutup',
        'id_user',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}

