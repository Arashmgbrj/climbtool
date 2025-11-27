<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccepteOrderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepte_order_models', function (Blueprint $table) {
            $table->id();
            $table->integer("factor_number");
            $table->string("phone_number");
            $table->string("user_id");
            $table->decimal('price', 8, 7); 
            $table->string("pr_ids");
            $table->string("pr_counts");

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
        Schema::dropIfExists('accepte_order_models');
    }
}
