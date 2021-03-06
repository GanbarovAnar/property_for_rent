<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseParameterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_parameter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("house_id");
            $table->unsignedBigInteger("parameter_id");
            $table->timestamps();

            $table->foreign("house_id")->references("id")->on("houses");
            $table->foreign("parameter_id")->references("id")->on("parameters");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_parameter');
    }
}
