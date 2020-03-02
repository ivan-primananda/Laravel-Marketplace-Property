<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_agent')->unsigned();
            $table->string('title');
            // $table->string('images');
            $table->string('jumlah_lantai');
            $table->string('daya_listrik');
            $table->string('tipe_properti');
            $table->string('tipe_iklan');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('sertifikat');
            $table->string('kamar_tidur');
            $table->string('kamar_mandi');
            $table->string('garasi');
            $table->bigInteger('harga');
            $table->bigInteger('minimal_dp');
            $table->string('lokasi_pulau');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kota');
            $table->string('deskripsi');
            $table->timestamps();

            // set FK
            $table->foreign('id_agent')->references('id')->on('agent')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_property');
    }
}
