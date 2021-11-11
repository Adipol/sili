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

            $table->dateTime('description_beginning');
            $table->dateTime('description_final');
            $table->string('link_xlsx', 100)->nullable();;
            $table->string('link_csv', 100)->nullable();
            $table->integer('aso_pep_new')->nullable();
            $table->integer('fbi_new')->nullable();
            $table->integer('f_pep_new')->nullable();
            $table->integer('gafi_new')->nullable();
            $table->integer('interpol_new')->nullable();
            $table->integer('ofac_new')->nullable();
            $table->integer('onu_new')->nullable();
            $table->integer('opi_new')->nullable();
            $table->integer('pep_ex_new')->nullable();
            $table->integer('pep_nal_new')->nullable();
            $table->integer('pepu_ex_new')->nullable();
            $table->integer('pepu_nal_new')->nullable();
            $table->integer('ue_new')->nullable();
            $table->integer('aso_pep_upgrade')->nullable();
            $table->integer('fbi_upgrade')->nullable();
            $table->integer('f_pep_upgrade')->nullable();
            $table->integer('gafi_upgrade')->nullable();
            $table->integer('interpol_upgrade')->nullable();
            $table->integer('ofac_upgrade')->nullable();
            $table->integer('onu_upgrade')->nullable();
            $table->integer('opi_upgrade')->nullable();
            $table->integer('pep_ex_upgrade')->nullable();
            $table->integer('pep_nal_upgrade')->nullable();
            $table->integer('pepu_ex_upgrade')->nullable();
            $table->integer('pepu_nal_upgrade')->nullable();
            $table->integer('ue_upgrade')->nullable();
            $table->text('description')->nullable();

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
