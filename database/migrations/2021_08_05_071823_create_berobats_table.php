<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerobatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berobats', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('Pasien_ID');
            $table->date('Tanggal_Berobat');
            $table->uuid('Dokter_ID');
            $table->string('Keluhan');
            $table->integer('Biaya_adm');

            $table->foreign('Pasien_ID')
            ->references('Pasien_ID')->on('pasiens')
            ->onDelete('cascade');
    
            $table->foreign('Dokter_ID')
            ->references('Dokter_ID')->on('dokters')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berobats');
    }
}
