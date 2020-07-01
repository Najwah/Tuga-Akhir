<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id');
            $table->string('nomor_inventaris');
            $table->year('tahun_perolehan');
            $table->foreignId('sumber_dana_id');
            $table->string('kondisi');
            $table->string('tempat');
            $table->boolean('habis_pakai');
            $table->foreignId('peruntukan_id');
            $table->string('peruntukan_type');
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
        Schema::dropIfExists('inventaris');
    }
}
