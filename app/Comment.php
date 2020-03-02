<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_property',
        'from',
        'komentar',
    ];
}
