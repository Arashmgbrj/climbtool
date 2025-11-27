<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('alt0');
            $table->string('alt1');
            $table->string('alt2');
            $table->string('alt3');
            $table->string('title');
            $table->string('price');
            $table->string('short_des');
            $table->boolean('exist')->default(1);
          
            $table->integer('integer')->default(1);
            $table->string('des');
            
            $table->string('tags');
            
            $table->string('cat1');
            $table->string('cat2');
            $table->string('cat3');
            $table->string('cat4');
          
            $table->boolean('is_offer')->defult(0);
            $table->boolean('is_offer_price')->defult(0);
            
            





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
        Schema::dropIfExists('product_models');
    }
}
