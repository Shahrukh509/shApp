<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("Image")->nullable();
            $table->string("Contact")->nullable();
            $table->string("Address")->nullable();
            $table->string("Phone")->nullable();
            $table->string("Timings")->nullable();
            $table->string("Email")->nullable();
            $table->string("Email2")->nullable();
            $table->string("Footer")->nullable();
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
        Schema::dropIfExists('settings');
    }
}
