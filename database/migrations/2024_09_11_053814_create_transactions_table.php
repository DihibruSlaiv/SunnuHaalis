<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('transactiontype', ['debit', 'credit']);
            $table->integer('amount');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('journal_id');
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts')
            ->onDelete('cascade');

            $table->foreign('journal_id')->references('id')->on('journals')
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
        Schema::dropIfExists('transactions');
    }
}
