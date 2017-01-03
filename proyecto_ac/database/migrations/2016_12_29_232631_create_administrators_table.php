<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fkPerson')->unsigned();
            $table->string('businessName', 60);
            $table->integer('numberRegister');
            $table->timestamps();
            
            $table->foreign('fkPerson')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('administrators');
    }

}
