<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBca extends Model
{
    protected $table = 'bank_bca';

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
    ];

}
