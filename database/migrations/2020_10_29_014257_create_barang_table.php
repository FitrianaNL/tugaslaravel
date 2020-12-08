<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('kode_barang');
            $table->string('nama_barang', 50);
            $table->double('harga_satuan');
            $table->integer('stok');
            $table->string('keterangan');
            $table->string('id_suplier',10);
            $table->foreign('id_suplier')->references('id_suplier')->on('suplier');
            $table->tinyinteger('is_active')->nullable()->default(0);
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
        Schema::dropIfExists('barang');
    }
}
