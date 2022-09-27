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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->string('empid');
            $table->foreign('empid')->references('empid')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->date('Date');
            $table->string('Regular');
            $table->string('Overtime');
            $table->string('Sick');
            $table->string('Vacation');
            $table->string('Holiday');
            $table->string('Unpaid');
            $table->string('other');
            $table->string('Total'); 

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
        Schema::dropIfExists('timesheets');
    }
};
