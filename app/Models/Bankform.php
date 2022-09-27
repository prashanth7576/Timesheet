<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankform extends Model
{
    use HasFactory;

    protected $table = "bankforms";

    protected $fillable = ['accountholdername','accountnumber','ifsccode','bankname','branchname','companyaccountholdername','companyaccountnumber','companyifsccode','companybankname','companybranchname'];

    public function accountholdername()
    {
        return $this->belongsTo('\App\Models\User', 'id', 'accountholdername');
    }
}
