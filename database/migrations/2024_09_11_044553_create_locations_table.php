<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('city');
            $table->string('postcode')->nullable();
            $table->double('latitude', 8, 6);
            $table->double('longitude', 8, 6);           
            $table->enum('country', ['The Gambia', 'Senegal', 'Guinea-Bissau', 'Guinea','Niger','Benin','Burkina Faso','Liberia',"Cote D'Ivoire",'Togo','Mali','Nigeria','Sierra Leone','Ghana','Cabo Verde','Mauritania','Sao Tome and Principle','Gabon','Chad'])->default('The Gambia');            
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
        Schema::dropIfExists('locations');
    }
}
