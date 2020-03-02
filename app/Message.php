<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
    	'property_name',
    	'property_alamat',
        'from',
        'to',
        'message',
        'is_read',
    ];
}
