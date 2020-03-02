<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agent';
    protected $primaryKey = 'id';

    protected $fillable = [
        'picture',
        'full_name',
        'email',
        'password',
        'phone',
        'domisili',
        'file_cv',
    ];

    public function property()
    {
        return $this->hasMany('App\Property', 'id_agent');
    }
}
