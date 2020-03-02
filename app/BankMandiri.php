<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankMandiri extends Model
{
 	protected $table = 'bank_mandiri';

    protected $fillable = [
        'limit_kredit',
        'satu',
        'dua',
        'tiga',
        'empat',
        'lima',
        'enam',
        'tujuh',
        'delapan',
        'sembilan',
        'sepuluh',
        'sebelas',
        'duabelas',
        'tigabelas',
        'empatbelas',
    ];

}
