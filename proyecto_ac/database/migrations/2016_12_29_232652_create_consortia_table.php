<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsortiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('consortia', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fkAdministrator')->unsigned();
            $table->string('edifice', 60);
            $table->integer('floors');
            $table->string('cuit', 14);
            $table->string('address', 60);
            $table->integer('fkCity')->unsigned();
            $table->integer('backgroundReservation');
            $table->timestamps();
            
            $table->foreign('fkAdministrator')
                    ->references('id')
                    ->on('administrators')
                    ->onDelete('cascade');
            
            $table->foreign('fkCity')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade');
        });

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('consortia');
    }

}
