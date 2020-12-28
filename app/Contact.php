<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['alamat', 'email', 'telpon', 'instagram', 'facebook', 'twitter'];
}
