<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table= "employes";

    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Company_Name',
        'Empid',
        'Mobile_Number',
        'email',
        'employment_type',
        'Status',
        'company_id',
        
        
         ];
}
