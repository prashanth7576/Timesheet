<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeLoginsController extends Controller
{
    public function index()
    {
       

       
         return view('employe.register');
    }

    public function store(Request $request)
    {


        $this->validate($request, [

        
            'Name'=>'required|max:150',
            'empid'=>'required|max:150',
            'role'=>'required|max:150',
            'email' => 'required|email|max:150',
            'password' => 'required|confirmed'
        ]);

        
        $Name = $request->Name;
        $empid = $request->empid;
        $role = $request->role;
        $email = $request->email;
        $password  = Hash::make($request->password);
       

        
        
        $user_Id = Helper::IDGenerator(new User, 'user_Id', 5, 'USER'); /** Generate id */
        $q = new User;
        $q->user_Id = $user_Id;
        $q->Name = $Name;    
        $q->empid = $empid;
        $q->role = $role;
        $q->email = $email;
        $q->password = $password;
   
        $q->save();

       

            auth()->attempt($request->only('email','password'));



        return redirect('/')->with('success','Registration Successfull');


    }
}
