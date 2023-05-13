<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nik', 16);
            $table->string('nm_tamu', 50);
            $table->string('tempat', 50);
            $table->date('tgl_lahir');
            $table->string('jenkel', 10);
            $table->string('agama', 20);
            $table->string('status', 20);
            $table->string('foto', 100);
            $table->string('alamat', 100);
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
        Schema::dropIfExists('tamu');
    }
}
