<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('penitipans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->integer('jumlah_barang');
        $table->date('tanggal_awal');
        $table->date('tanggal_akhir');
        $table->string('alamat');
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
        Schema::dropIfExists('penitipans');
    }
};
