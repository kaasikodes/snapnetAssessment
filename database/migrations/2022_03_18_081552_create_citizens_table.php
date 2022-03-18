<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->text('name'); 
            $table->text('gender'); 
            $table->text('phone'); 
            $table->integer('ward_id'); 
            $table->integer('state_id'); 
            $table->integer('lga_id'); 
            $table->mediumText('address'); 
            $table->timestamps();
        });
        // id, name, gender, address, phone, ward_id
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}
