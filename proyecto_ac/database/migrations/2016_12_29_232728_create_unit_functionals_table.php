<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitFunctionalsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('functionalunits', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('unitFunctional');
            $table->integer('fkConsortium')->unsigned();
            $table->string('denomination', 4);
            $table->decimal('footage', 4, 2);
            $table->decimal('coefficient', 4, 2);
            $table->timestamps();
        });

        Schema::create('functionalunitspeople', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fkUnitFunctional')->unsigned();
            $table->integer('fkPerson')->unsigned();
            $table->timestamps();

            $table->foreign('fkPerson')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');
            
            $table->foreign('fkUnitFunctional')
                    ->references('id')
                    ->on('functionalunits')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('functional_units');
    }

}
