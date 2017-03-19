<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('firstName', 60);
            $table->string('lastName', 60);
            $table->string('paper', 8);
            $table->string('cuitCuil', 14);
            $table->string('address', 60);
            $table->integer('fkCity')->unsigned();
            $table->string('telephone', 10);
            $table->integer('fkTypePerson')->unsigned();
            $table->timestamps();

            $table->foreign('fkCity')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade');

            $table->foreign('fkTypePerson')
                    ->references('id')
                    ->on('typepeople')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('people');
    }

}
