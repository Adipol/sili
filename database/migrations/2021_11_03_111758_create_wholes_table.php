<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWholesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_detail');
            $table->foreign('id_detail')->references('id')->on('details');
            $table->integer('amount');
            $table->string('link', 100);

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
        Schema::dropIfExists('wholes');
    }
}
