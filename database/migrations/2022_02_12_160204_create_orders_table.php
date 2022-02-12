<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
   Schema::create('orders', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->string('product_id');
        $table->string('ime');
        $table->string('prezime');
        $table->string('adresa');
        $table->string('grad');
        $table->string('pbr');  
        $table->string('drzava');
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
        Schema::dropIfExists('orders');
    }
}
