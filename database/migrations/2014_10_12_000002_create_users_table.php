<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->unsignedInteger('usrtype_id')->default(1);
            $table->unsignedInteger('company_id')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('usrtype_id')->references('id')->on('usrtypes');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table){
            $table->dropForeign(['usrtype_id']);
            $table->dropForeign(['company_id']);
        });

        Schema::dropIfExists('users');
    }
}
