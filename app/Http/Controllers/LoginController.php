<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Users;



class LoginController extends Controller
{
    public function index()
    {
      
       
         return view('auth.login');
    }

    public function redirectTo(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))){
           return back()->witherrorMessage('Invalid Details');   
        }


        if (Auth::user()->role == 2) {
            
            return redirect('/permission');
        }else{
            return redirect('/user');
        }

        /*
        switch (Auth::user()->role){
            case 1:
                return redirect('/superadmin');
                break;
            case 2:
               return redirect('/permission');
                break;
            case 3:
                return redirect('/user');
                break;
         
                default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
                break;
        }

        */
    } 
    
    

}