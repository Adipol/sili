<?php

use App\Models\Control;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->id();

            $table->string('id_pep');
            $table->string('id_all')->nullable();
            $table->enum('type', [1, 2]);
            $table->string('code', 20);
            $table->string('name_one')->nullable();
            $table->string('name_two')->nullable();
            $table->string('last_name_one')->nullable();
            $table->string('last_name_two')->nullable();
            $table->string('type_document', 5)->nullable();
            $table->string('nro_document')->nullable();
            $table->string('extension', 5)->nullable();
            $table->string('country_abbreviation', 5)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('department', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('type_pep', 50);
            $table->string('position_country', 5)->nullable();
            $table->string('position')->nullable();
            $table->string('entity')->nullable();
            $table->string('management')->nullable();
            $table->text('justification')->nullable();
            $table->date('report_date');
            $table->string('management_all')->nullable();
            $table->string('entity_all')->nullable();
            $table->text('justification_all')->nullable();
            $table->string('type_all', 5)->nullable();
            $table->string('type_fam', 20)->nullable();
            $table->string('detail')->nullable();
            $table->string('profession')->nullable();
            $table->bigInteger('id_register')->unique();

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
        Schema::dropIfExists('controls');
    }
}
