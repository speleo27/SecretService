<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSafeHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safe_houses', function (Blueprint $table) {
            $table->id();
            $table->text("safeHouse_address");
            $table->foreignId("country_id")->constrained();
            $table->unsignedBigInteger("type_id");
            $table->foreign('type_id')->references('id')->on('safe_houses_types');
            $table->integer("digit");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safe_houses');
    }
}
