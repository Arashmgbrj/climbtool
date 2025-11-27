<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("intro");
            $table->string("titr1");
            $table->string("par1");
            $table->string("titr2");
            $table->string("par2");
            $table->string("titr3");
            $table->string("par3");
            $table->string("titr4");
            $table->string("par4");
            $table->string("titr5");
            $table->string("par5");
            $table->string("titr6");
            $table->string("par6");
            $table->string("titr7");
            $table->string("par7");
            $table->string("titr8");
            $table->string("par8");
            $table->string("titr9");
            $table->string("par9");
            $table->string("titr10");
            $table->string("par10");
            $table->string("img1")->default("none");
            $table->string("img2")->default("none");
            $table->string("img3")->default("none");
            $table->string("img5")->default("none");
            $table->string("img6")->default("none");
            $table->string("img7")->default("none");
            $table->string("img8")->default("none");
            $table->string("img9")->default("none");
            $table->string("img10")->default("none");
            $table->string("alt1")->default("none");
            $table->string("alt2")->default("none");
            $table->string("alt3")->default("none");
            $table->string("alt4")->default("none");
            $table->string("alt5")->default("none");
            $table->string("alt6")->default("none");
            $table->string("alt7")->default("none");
            $table->string("alt8")->default("none");
            $table->string("alt9")->default("none");
            $table->string("alt10")->default("none");
            $table->string("cat1");
            $table->string("cat2")->default("");
            $table->string("cat3")->default("");
            $table->string("cat4")->default("");
            $table->string("auth");
            $table->string("labels");
            
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
        Schema::dropIfExists('master_blogs');
    }
}
