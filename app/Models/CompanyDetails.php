<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;

    protected $table = 'CompanyDetails';

    protected $fillable =[
        'Companyname',
        'Companycode',
        'Companyaddress',
        'TotalEmployes',
        'Location',
        'Status',
        'CreatedDate'
    ];
}
