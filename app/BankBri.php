<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBri extends Model
{
    protected $table = 'bank_bri';

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
    ];
}
