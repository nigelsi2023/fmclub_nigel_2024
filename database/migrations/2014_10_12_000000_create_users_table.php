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
            
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('telephone')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address')->nullable();
            $table->string('dob')->nullable();
            $table->enum('sex', ['Male', 'Female'])->default('Male')->nullable();
            $table->string('password');
            $table->string('role');
            $table->string('occupation')->nullable();
            $table->enum('buy_traders', ['Yes', 'No'])->default('No');
            $table->string('investing');
            $table->enum('trading_course', ['Yes', 'No'])->default('No');
            $table->string('trading_with')->nullable();
            $table->rememberToken();
            $table->string('security_question')->nullable();
            $table->string('security_answer')->nullable();
            $table->string('how_find')->nullable();
            $table->string('why_join')->nullable();
            $table->string('find_information')->nullable();
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
}
