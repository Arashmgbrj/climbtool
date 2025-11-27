<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryDenyModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_deny_models', function (Blueprint $table) {
            $table->id();
            $table->string("factor_number");
            $table->string("user_id");
            $table->string("pr_id");
            $table->string("count");
            $table->string("address");
            $table->string("post_id");
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
        Schema::dropIfExists('delivery_deny_models');
    }
}
