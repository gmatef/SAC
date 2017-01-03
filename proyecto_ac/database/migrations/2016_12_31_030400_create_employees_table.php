<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up() {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fkPerson')->unsigned();
            $table->string('file', 10);
            $table->timestamps();
            
            $table->foreign('fkPerson')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');
        });
        
        Schema::create('employeesadministrators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fkEmployee')->unsigned();
            $table->integer('fkAdministrator')->unsigned();
            $table->timestamps();
            
            $table->foreign('fkAdministrator')
                    ->references('id')
                    ->on('administrators')
                    ->onDelete('cascade');
            
            $table->foreign('fkEmployee')
                    ->references('id')
                    ->on('employees')
                    ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('employees');
    }

}
