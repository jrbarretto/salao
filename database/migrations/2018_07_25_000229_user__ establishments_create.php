<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEstablishmentsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('establishment_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('establishment_id')->references('id')->on('establishments');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishment_user',function (Blueprint $table){
            $table->dropForeign(['establishment_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('establishment_user');

        //
    }
}
