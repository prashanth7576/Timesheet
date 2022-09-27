<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    function index(Request $request)
    {

        $user = Auth::user();
        $data = DB::table('CompanyDetails')->where('Companyname', $user->Companyname)->get();

        return view('admin.index', compact('data', 'user'));


    }

 
    }


   

