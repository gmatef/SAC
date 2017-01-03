<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fkFunctionalUnit')->unsigned();
            $table->integer('fkConsortium')->unsigned();
            $table->integer('fkProvider')->unsigned();
            $table->integer('fkInvoice')->unsigned();
            $table->integer('fkExpenseType')->unsigned();
            $table->timestamps();
            
            $table->foreign('fkFunctionalUnit')
                    ->references('id')
                    ->on('functionalunits')
                    ->onDelete('cascade');
            
            $table->foreign('fkConsortium')
                    ->references('id')
                    ->on('consortia')
                    ->onDelete('cascade');
            
            $table->foreign('fkProvider')
                    ->references('id')
                    ->on('providers')
                    ->onDelete('cascade');
            
            $table->foreign('fkInvoice')
                    ->references('id')
                    ->on('invoices')
                    ->onDelete('cascade');
            
            $table->foreign('fkExpenseType')
                    ->references('id')
                    ->on('expensetypes')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
