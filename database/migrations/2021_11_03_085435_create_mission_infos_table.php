<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('missions_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->foreignId('contact_id')->constrained();
            $table->foreignId('target_id')->constrained();
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
        Schema::dropIfExists('mission_infos');
    }
}
