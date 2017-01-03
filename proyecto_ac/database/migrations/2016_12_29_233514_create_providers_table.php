<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fkPerson')->unsigned();
            $table->integer('fkItem')->unsigned();
            $table->string('businessName', 60);
            $table->string('cuit', 14);
            $table->string('commercialAddress', 60);
            $table->integer('fkCity')->unsigned();
            $table->string('telephone', 10);
            $table->timestamps();
            
            $table->foreign('fkPerson')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');
            
            $table->foreign('fkItem')
                    ->references('id')
                    ->on('items')
                    ->onDelete('cascade');
            
            $table->foreign('fkCity')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade');
        });
        
        

        Schema::create('consortiumsuppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fkProvider')->unsigned();
            $table->integer('fkConsortium')->unsigned();
            $table->timestamps();
            
            $table->foreign('fkConsortium')
                    ->references('id')
                    ->on('consortia')
                    ->onDelete('cascade');
            
            $table->foreign('fkProvider')
                    ->references('id')
                    ->on('providers')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('providers');
    }

}
