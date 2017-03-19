<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fkInvoicetype')->unsigned();
            $table->integer('fkConsortium')->unsigned();
            $table->integer('fkProvider')->unsigned();
            $table->string('sellingPoint', 4);
            $table->string('proofPayment', 8);
            $table->integer('fkDetail')->unsigned();
            $table->decimal('totalInvoice', 4, 2);
            $table->timestamps();

            $table->foreign('fkInvoicetype')
                    ->references('id')
                    ->on('invoicetypes')
                    ->onDelete('cascade');

            $table->foreign('fkConsortium')
                    ->references('id')
                    ->on('consortia')
                    ->onDelete('cascade');

            $table->foreign('fkProvider')
                    ->references('id')
                    ->on('providers')
                    ->onDelete('cascade');

            $table->foreign('fkDetail')
                    ->references('id')
                    ->on('invoicedetails')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('invoices');
    }

}
