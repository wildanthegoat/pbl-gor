<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->unsignedBigInteger('id_user');
            $table->integer('id_jadwal')->unsigned();
            $table->string('status_pembayaran', 25);
            
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals');
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
