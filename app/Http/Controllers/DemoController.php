<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index(){
      
		$data = Demo::all();

        return view('demos', compact('data'));
            
    }

    public function updateStatus(Request $request)
{
    
   
    
    $demo = Demo::find($request->demo_id); 
    $demo->Status = $request->Status;
    $demo->save();
    return response()->json('message', 'Status changed!');
}
}
