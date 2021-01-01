<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiPendaftaran extends Model
{
    protected $table = 'informasi_pendaftaran';
    protected $fillable = ['gambar', 'deskripsi', 'status'];
}
