<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as IlluminateAuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Emp as Authenticatable;

class Emp extends Model implements AuthAuthenticatable
{
    use HasFactory, IlluminateAuthAuthenticatable;
}
