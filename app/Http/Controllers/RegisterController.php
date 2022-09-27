<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;





class RegisterController extends Controller
{
    public function index()
    {
       

       
         return view('auth.register');
    }

    public function store(Request $request)
    {


        $this->validate($request, [

        
            'Companyname' => 'required|max:150',
            'Companycode' => 'required|max:50',
            'email' => 'required|email|max:150',
            'password' => 'required|confirmed'
        ]);

        
        $Companyname = $request->Companyname;
        $Companycode = $request->Companycode;
        $email = $request->email;
        $password  = Hash::make($request->password);
       

        
        
        $user_Id = Helper::IDGenerator(new User, 'user_Id', 5, 'USER'); /** Generate id */
        $q = new User;
        $q->user_Id = $user_Id;
       
        $q->Companyname = $Companyname;
        $q->Companycode = $Companycode;
        $q->email = $email;
        $q->password = $password;
   
        $q->save();

       

            auth()->attempt($request->only('email','password'));



        return redirect()->route('login')->withSuccessMessage('Registration Successfull');


    }
}