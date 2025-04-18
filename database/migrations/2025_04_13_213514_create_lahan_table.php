<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahan', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi_id')->nullable();
            $table->string('kabupaten_id')->nullable();
            $table->string('kecamatan_id')->nullable();
            $table->string('desa_id')->nullable();
            $table->string('tanaman');
            $table->date('tanggal_penanaman')->nullable();
            $table->date('tanggal_panen')->nullable();
            $table->decimal('latitude', 10, 6);
            $table->decimal('longitude', 10, 6);
            $table->float('luas_lahan', 8, 2);
            $table->foreignId('petani_id')->references('id')->on('petani')->onDelete('cascade');
            $table->foreignId('jenis_tanaman_id')->references('id')->on('jenis_tanaman')->onDelete('cascade');
            $table->enum('status', ['baru_penanaman','siap_panen','panen'])->default('baru_penanaman');
            $table->softDeletes();
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
        Schema::dropIfExists('lahan');
    }
}
