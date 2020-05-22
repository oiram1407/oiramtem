<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_products', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id('id_product');
            $table->string('product_name');
            $table->unsignedBigInteger('id_branch');
            $table->unsignedBigInteger('id_user');
            $table->double('product_price_public', 8, 2);
            $table->double('product_price_provider', 8, 2);
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
        Schema::dropIfExists('p_products');
    }
}
