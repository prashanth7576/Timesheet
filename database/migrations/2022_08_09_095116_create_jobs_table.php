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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'Companyname');
            $table->foreign('Companyname')->references('Companyname')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string(column: 'JobId');
            $table->string(column: 'JobTitle');
            $table->string(column: 'JobRole');
            $table->text(column: 'Description');
            $table->unsignedBigInteger(column: 'Positions');
            $table->text(column: 'Location');
            $table->unsignedBigInteger(column: 'AnnualSalary');
  
            $table->unsignedBigInteger(column: 'Active');

            $table->string(column: 'ApplyLink');
            $table->date(column: 'CloseDate')->diffForHumans();
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
        Schema::dropIfExists('jobs');
    }
};
