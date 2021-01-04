<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_list', function (Blueprint $table) {
            $table->id();
            $table->string("orderid");
            $table->string("userid");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("country");
            $table->string("state");
            $table->string("street");
            $table->string("number");
            $table->string("zipcode");
            $table->string("city");
            $table->decimal("price");
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
        Schema::dropIfExists('orders_list');
    }
}
