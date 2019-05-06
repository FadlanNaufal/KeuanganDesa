<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepalaKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_keluargas', function (Blueprint $table) {
             $table->increments('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('nama_pengganti')->nullable();
            $table->enum('status',['aktif','non-aktif'])->default('aktif');
            $table->string('pekerjaan');
            $table->enum('agama',['islam','kristen','katolik','hindu','budha']);
            $table->text('alamat');
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
        Schema::dropIfExists('kepala_keluargas');
    }
}
