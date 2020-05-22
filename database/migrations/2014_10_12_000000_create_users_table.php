<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_users', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('verified_user')->default(0);
            $table->string('password');
            $table->unsignedBigInteger('id_role')->default(3);
            $table->date('birth_at');
            $table->rememberToken();
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
        Schema::dropIfExists('u_users');
    }
}
