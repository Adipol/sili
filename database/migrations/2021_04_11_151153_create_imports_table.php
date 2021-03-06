<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->id();

            $table->string('year', 4);

            $table->foreignId('id_month');
            $table->foreign('id_month')->references('id')->on('months');

            $table->foreignId('id_detail');
            $table->foreign('id_detail')->references('id')->on('details');

            $table->date('description_beginning')->unique();
            $table->date('description_final')->unique();

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
        Schema::dropIfExists('imports');
    }
}
