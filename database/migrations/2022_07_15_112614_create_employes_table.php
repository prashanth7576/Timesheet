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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Company_Name');
            $table->string('Empid')->unique();
            $table->foreign('Company_Name')->references('Companyname')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('email')->unique();
            $table->string('Mobile_Number')->unique();
            $table->string('employment_type');
            $table->string('Status');
            $table->string('company_id');
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
        Schema::dropIfExists('employes');
    }
};
