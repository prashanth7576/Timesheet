<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table='jobs';

    protected $fillable = [
        'Companyname',
        'JobId',
        'JobTitle',
        'JobRole',
        'Description',
        'Positions',
        'Location',
        'AnnualSalary',
        'Active',
        'ApplyLink',
        'CloseDate',
         ];
         
}
