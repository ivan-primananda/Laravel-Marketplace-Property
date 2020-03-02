<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBni extends Model
{
    protected $table = 'bank_bni';

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
