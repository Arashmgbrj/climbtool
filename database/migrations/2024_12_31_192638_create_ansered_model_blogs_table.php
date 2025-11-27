<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnseredModelBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ansered_model_blogs', function (Blueprint $table) {
            $table->id();
            $table->string("user_name");
            $table->string("blog_name");
            $table->string("qu");
            $table->string("an");
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
        Schema::dropIfExists('ansered_model_blogs');
    }
}
