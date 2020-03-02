<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    protected $fillable = [
        'picture',
        'full_name',
        'email',
        'password',
        'phone',
        'domisili',
    ];

}
