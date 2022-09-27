<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaySlipController extends Controller
{
    public function index()
    {
       
        $user = Auth::user();
        $data = DB::table('employementforms')->where('employeeid', $user->empid)->get();
        $bank = DB::table('bankforms')->where('accountholdername', $user->Name)->get();
        $pay = DB::table('payrollforms')->where('empid', $user->empid)->get();
        $value = DB::table('employeeforms')->where('first', $user->Name)->get();

        return view('payslip', compact('user', 'data','bank','pay','value'));
    }
}
