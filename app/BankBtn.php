<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBtn extends Model
{
    protected $table = 'bank_btn';

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
        'limabelas',
        'enambelas',
        'tujuhbelas',
        'delapanbelas',
        'sembilanbelas',
        'duapuluh',
    ];
}
