<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->default("user");
            $table->string("phone_number")->unique();
            $table->integer('avrivated_token')->unique();
            $table->boolean('is_avtive')->default(0);

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
        Schema::dropIfExists('personal_users');
    }
}
