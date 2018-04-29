<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStafSeksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf_seksis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaseksi');
            $table->integer('bidang_id')->unsigned();
            $table->foreign('bidang_id')->references('id')
                  ->on('staf_bidangs')
                  ->onDelete('cascade');
            $table->string('kepalaseksi');
            $table->integer('nipkasek');
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
        Schema::dropIfExists('staf_seksis');
    }
}
