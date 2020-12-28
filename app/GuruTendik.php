<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruTendik extends Model
{
    protected $table = 'gurutendik';
    protected $fillable = ['nama', 'jabatan', 'motto', 'foto', 'facebook', 'instagram', 'twitter'];
}
