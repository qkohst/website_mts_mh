<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileMadrasah extends Model
{
    protected $table = 'profile_madrasah';
    protected $fillable = ['nama', 'deskripsi', 'gambar', 'logo', 'jumlah_rombel', 'jumlah_siswa', 'jumlah_guru', 'jumlah_tendik'];
}
