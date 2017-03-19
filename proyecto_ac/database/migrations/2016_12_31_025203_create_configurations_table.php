<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->boolean('contactProperty');
            $table->boolean('receiveNotificationsByEmail');
            $table->boolean('postulateBoard');
            $table->timestamps();
            
        });
        
        
         Schema::create('peopleconfigurations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fkPerson')->unsigned();
            $table->integer('fkConfigration')->unsigned();
            $table->timestamps();
            
             $table->foreign('fkPerson')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');
             
             $table->foreign('fkConfigration')
                    ->references('id')
                    ->on('configurations')
                    ->onDelete('cascade');
            
        });
       
    }

    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('configurations');
    }

}