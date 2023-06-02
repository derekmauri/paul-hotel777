<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tamu_id')
                ->constrained('tamu')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('daftar_kamar_id')->constrained('daftar_kamar')->onUpdate('cascade')->onDelete('cascade');
            $table->date('checkin');
            $table->integer('lama');
            $table->integer('total_bayar');
            $table->string('ket', 100)->nullable();
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
        Schema::dropIfExists('pesanan');
    }
}
