<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelBtn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_btn', function (Blueprint $table) {
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
            $table->string('sebelas');
            $table->string('duabelas');
            $table->string('tigabelas');
            $table->string('empatbelas');
            $table->string('limabelas');
            $table->string('enambelas');
            $table->string('tujuhbelas');
            $table->string('delapanbelas');
            $table->string('sembilanbelas');
            $table->string('duapuluh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_btn');
    }
}
