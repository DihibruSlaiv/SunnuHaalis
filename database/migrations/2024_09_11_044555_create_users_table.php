<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('mobile')->unique();
            $table->boolean('is_verified');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')
            ->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
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
        Schema::dropIfExists('users');
    }
}
