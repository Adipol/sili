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
            $table->string('link', 100);


            $table->integer('aso_pep_new');
            $table->integer('fbi_new');
            $table->integer('f_pep_new');
            $table->integer('gafi_new');
            $table->integer('interpol_new');
            $table->integer('ofac_new');
            $table->integer('onu_new');
            $table->integer('opi_new');
            $table->integer('pep_ex_new');
            $table->integer('pep_nal_new');
            $table->integer('pepu_ex_new');
            $table->integer('pepu_nal_new');
            $table->integer('ue_new');

            $table->integer('aso_pep_upgrade');
            $table->integer('fbi_upgrade');
            $table->integer('f_pep_upgrade');
            $table->integer('gafi_upgrade');
            $table->integer('interpol_upgrade');
            $table->integer('ofac_upgrade');
            $table->integer('onu_upgrade');
            $table->integer('opi_upgrade');
            $table->integer('pep_ex_upgrade');
            $table->integer('pep_nal_upgrade');
            $table->integer('pepu_ex_upgrade');
            $table->integer('pepu_nal_upgrade');
            $table->integer('ue_upgrade');

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
