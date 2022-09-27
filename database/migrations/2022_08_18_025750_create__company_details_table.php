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
        Schema::create('CompanyDetails', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'Companyname');
            $table->foreign('Companyname')->references('Companyname')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string(column: 'Companycode');
            $table->string(column: 'Companyaddress');
            $table->unsignedBigInteger(column: 'TotalEmployes');
            $table->string(column: 'Location');
            $table->string(column: 'Status');
            $table->date(column: 'CreatedDate');
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
        Schema::dropIfExists('CompanyDetails');
    }
};
