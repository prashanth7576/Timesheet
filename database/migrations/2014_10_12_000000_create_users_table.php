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
            $table->string('user_Id');
            $table->string('Name')->nullable();
            $table->string('Companyname')->nullable()->unique();
            $table->string('Companycode')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('role')->default(2);
            $table->string('empid')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->default('public/Image/user.png');
            $table->string('password');
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
