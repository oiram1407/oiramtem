<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('u_users', function (Blueprint $table){
        $table->foreign('id_role')->references('id_role')->on('u_roles');
      });

      Schema::table('u_password_resets', function (Blueprint $table){
          $table->foreign('email')->references('email')->on('u_users');
      });

      Schema::table('p_products', function (Blueprint $table){
          $table->foreign('id_branch')->references('id_branch')->on('p_branches');
          $table->foreign('id_user')->references('id_user')->on('u_users');
      });

      Schema::table('p_branches', function (Blueprint $table) {
          $table->foreign('id_user')->references('id_user')->on('u_users');
      });

      Schema::table('w_contacts', function (Blueprint $table) {
          $table->foreign('id_reason')->references('id_reason')->on('w_messages_contact');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign');
    }
}
