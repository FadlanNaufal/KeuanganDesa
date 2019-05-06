<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kk_id')->unsigned();
            $table->integer('nik');
            $table->string('nama');
            $table->string('status');
            $table->enum('jk',['laki-laki','perempuan']);
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
        Schema::dropIfExists('wargas');
    }
}

