<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
        });

        DB::table('account_types')->insert([
            ['name' => 'Asset'],
            ['name' => 'Liability'],
            ['name' => 'Equity'],
            ['name' => 'Revenue'],
            ['name' => 'Expense'],
            ['name' => 'Dividend']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_types');
    }
}
