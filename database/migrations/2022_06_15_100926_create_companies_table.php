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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
           
            $table->string('Company_Id');
            $table->string(column: 'Company_Code');
            
            $table->string(column: 'Company_Name');
            $table->string(column: 'Company_Address');
            $table->date(column: 'Next_Check_Date')->nullable();
            $table->string(column: 'Status')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
