<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestiniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('lat');
            $table->double('lng');
            $table->string('google_place_id')->nullable();
            $table->integer('travel_id');
            $table->integer('index');
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
        Schema::dropIfExists('destinies');
    }
}
