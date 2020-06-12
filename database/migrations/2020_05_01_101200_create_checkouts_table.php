<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string("firstname");
            $table->string("lastname");
            $table->string("username");
            $table->unsignedInteger('phone');
            $table->string("email");
            $table->string("country");
            $table->string("state");
            $table->string("zip");
            $table->string("status")->nullable();
            $table->unsignedInteger("price");
            $table->string("ship_address1");
            $table->string("ship_address2")->nullable();
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
