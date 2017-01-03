<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicetypes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->enum('description',['A', 'A con leyenda', 'M', 'B', 'C', 'E','Consumidor final',])->default('Consumidor final');
            $table->string('legend', 20);
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
        Schema::dropIfExists('invoicetypes');
    }
}
