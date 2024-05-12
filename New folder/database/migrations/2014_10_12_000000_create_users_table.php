<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->string("phone")->nullable();
            $table->string('email',64)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',64);
            $table->string('address',64)->nullable();
            $table->string('avatar')->nullable();
            $table->string('usertype',64)->default('user');
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
        Schema::dropIfExists('users');
    }
};
