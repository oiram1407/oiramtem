<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_contacts', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id('id_contact');
            $table->string('name_contact');
            $table->string('email_contact');
            $table->unsignedBigInteger('id_reason');
            $table->longText('message_contact');
            $table->ipAddress('ip_contact');
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
        Schema::dropIfExists('w_contacts');
    }
}
