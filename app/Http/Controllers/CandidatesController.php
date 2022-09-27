<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CandidatesController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $data = DB::table('employes')->where('Company_Name', $user->Companyname)->where([
        
            ['First_Name' , '!=' , Null],
            [function ($query) use ($request){
                if(($term = $request->term)){
              
                    $query->orWhere('First_Name',  'LIKE' , '%' . $term . '%')->get();
      
                }
            }]
        ])->get();

        return view('emp', compact('user', 'data'));
    }
}
