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
            $table->string('checkin', 20);
            $table->string('lama', 20);
            $table->foreignId('tipe_id')
                ->constrained('tipe')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('total_bayar', 100);
            $table->string('ket', 100);
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
