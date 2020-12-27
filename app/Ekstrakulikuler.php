<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    protected $table = 'ekstrakulikuler';
    protected $fillable = ['nama', 'deskripsi', 'foto'];
}
