<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use Auth;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employe.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Company_Name' => 'required',
            'Empid' => 'required',
            'Mobile_Number' => 'required',
            'email' => 'required|email',
            'employment_type' => 'required',
            'Status' => 'required',
            'company_id' => 'required',
           
           
        ]);

        $employee = new Employee;
        $employee->First_Name = $request->First_Name;
        $employee->Last_Name = $request->Last_Name;
        $employee->Company_Name = $request->Company_Name;
        $employee->Empid = $request->Empid;
        $employee->Mobile_Number = $request->Mobile_Number;
        $employee->email = $request->email;
        $employee->employment_type = $request->employment_type;
        $employee->Status = $request->Status;
        $employee->company_id = $request->company_id;

        $save = $employee->save();
        
   

        return redirect('/emp')->with('success', 'data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check(Request $request){

       // return $request->input();
       $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'

        ]); 

       $userInfo = Employee::where('email','=', $request->email)->first();

       if(!$userInfo){
        return back()->with('fail', 'we do not recognise your email address');
       }else{
        if(Hash::check($request->password, $userInfo->password)){
            return redirect('/user');

        }else{
            return back()->with('fail', 'Incorrect Password');
        }
       }
    }
}