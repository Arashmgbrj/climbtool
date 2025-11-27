<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateAdminModelsTable extends Migration  
{  
    /**  
     * Run the migrations.  
     *  
     * @return void  
     */  
    public function up()  
    {  
        Schema::create('admin_models', function (Blueprint $table) {  
            $table->id();  
            $table->string('name')->unique(); // اصلاح شده  
            $table->string('token')->unique();  
            $table->string('pass')->unique();  
            $table->string('phone_number')->unique();  
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
        Schema::dropIfExists('admin_models');  
    }  
}