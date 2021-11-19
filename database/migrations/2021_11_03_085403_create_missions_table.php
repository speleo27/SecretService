<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->foreignId("country_id")->constrained();
            $table->unsignedBigInteger("type_id");
            $table->foreign('type_id')->references('id')->on('mission_types');
            $table->foreignId("status_id")->constrained();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
