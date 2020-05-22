<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePForeign1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('p_products', function (Blueprint $table) {
            $table->unsignedBigInteger('id_category')->after('id_user');

            $table->foreign('id_category')->references('id_category')->on('p_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('p_products', function (Blueprint $table) {
            //
        });
    }
}
