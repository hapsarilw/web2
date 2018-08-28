<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postpo', function (Blueprint $table) {
            $table->increments('idPostPO');
            $table->integer('idUser')->unsigned()->unique();
            $table->integer('idTraveller')->unsigned()->unique();
            $table->integer('idTransaksi')->unsigned()->unique();
            $table->dateTime('waktuPost');
            $table->enum('statusPost', array('open', 'pending_deal', 'pending_purchase', 'pending_delivery', 'completed'));
            $table->date('tanggal');
            $table->integer('jumlah');

            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idTraveller')->references('idTraveller')->on('traveller');
            $table->foreign('idTransaksi')->references('idTransaksi')->on('p_transaksi');

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
        Schema::dropIfExists('postPO');
    }
}
