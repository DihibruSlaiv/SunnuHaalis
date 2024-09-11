<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('debit')->default(0);
            $table->integer('credit')->default(0);
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
        Schema::dropIfExists('journal_entries');
    }
}
