<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->longText("s1_Title")->nullable();
            $table->longText("s1_Description")->nullable();
            $table->string("s1_Image")->nullable();
            $table->longText("s2_Title")->nullable();
            $table->longText("s2_Heading1")->nullable();
            $table->longText("s2_Description1")->nullable();
            $table->longText("s2_Heading2")->nullable();
            $table->longText("s2_Description2")->nullable();
            $table->longText("s2_Heading3")->nullable();
            $table->longText("s2_Description3")->nullable();
            $table->longText("s2_Heading4")->nullable();
            $table->longText("s2_Description4")->nullable();
            $table->string("s2_Image")->nullable();
            $table->longText("s3_Title")->nullable();
            $table->longText("s3_Description")->nullable();
            $table->string("s3_Image")->nullable();
            $table->longText("s4_Title")->nullable();
            $table->longText("s5_Title")->nullable();
            $table->longText("s5_Heading1")->nullable();
            $table->longText("s5_Description1")->nullable();
            $table->string("s5_Image1")->nullable();
            $table->longText("s5_Heading2")->nullable();
            $table->longText("s5_Description2")->nullable();
            $table->string("s5_Image2")->nullable();
            $table->longText("s5_Heading3")->nullable();
            $table->longText("s5_Description3")->nullable();
            $table->string("s5_Image3")->nullable();
            $table->longText("s6_Title")->nullable();
            $table->longText("s6_Paragraph")->nullable();
            $table->string("s6_Image1")->nullable();
            $table->longText("s6_Description1")->nullable();
            $table->string("s6_Image2")->nullable();
            $table->longText("s6_Description2")->nullable();
            $table->string("s6_Image3")->nullable();
            $table->longText("s6_Description3")->nullable();
            $table->string("s6_Image4")->nullable();
            $table->longText("s6_Description4")->nullable();
            $table->string("s6_Image5")->nullable();
            $table->longText("s6_Description5")->nullable();
            $table->string("s6_Image6")->nullable();
            $table->longText("s6_Description6")->nullable();
            $table->longText("s7_Heading")->nullable();
            $table->longText("s7_Description")->nullable();
            $table->string("s7_Image")->nullable();

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
        Schema::dropIfExists('homepage');
    }
}
