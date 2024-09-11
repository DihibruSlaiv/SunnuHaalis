<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('publicaccount_id')->unique();
            $table->string('accountname');
            $table->unsignedBigInteger('accounttype_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parent_account_id')->nullable();
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('accounttype_id')->references('id')->on('account_types')
            ->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('accounts');
    }
}
