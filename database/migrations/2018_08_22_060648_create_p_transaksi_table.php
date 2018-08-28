<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_transaksi', function (Blueprint $table) {
            $table->increments('idPTransaksi');
            $table->string(noTelp, 12);
            $table->string(departemen, 20);
            $table->string(jabatabn, 20);



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
        Schema::dropIfExists('p_transaksi');
    }
}
