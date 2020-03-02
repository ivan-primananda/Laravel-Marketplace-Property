<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelBri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_bri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('limit_kredit');
            $table->string('satu');
            $table->string('dua');
            $table->string('tiga');
            $table->string('empat');
            $table->string('lima');
            $table->string('enam');
            $table->string('tujuh');
            $table->string('delapan');
            $table->string('sembilan');
            $table->string('sepuluh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_bri');
    }
}
