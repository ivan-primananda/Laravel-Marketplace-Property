<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    protected $fillable = [
        'id_agent',
        'title',
        // 'images',
        'jumlah_lantai',
        'daya_listrik',
        'tipe_properti',
        'tipe_iklan',
        'luas_tanah',
        'luas_bangunan',
        'sertifikat',
        'kamar_tidur',
        'kamar_mandi',
        'garasi',
        'harga',
        'minimal_dp',
        'lokasi_pulau',
        'alamat',
        'kecamatan',
        'kelurahan',
        'kota',
        'deskripsi',
    ];

    public function agent()
    {
        return $this->belongsTo('App\Agent', 'id_agent');
    }
}
