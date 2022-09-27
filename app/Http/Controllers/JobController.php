<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $user = Auth::user();
        $data = Job::all()->where('Companyname', $user->Companyname);
        return view('jobs.index', compact('data','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = $request->validate([
            'Companyname'=>'required',
            'JobId' => 'required',
            'JobTitle' => 'required',
            'JobRole' => 'required',
            'Description' => 'required',
            'Positions' => 'required',
            'Location' => 'required',
            'AnnualSalary' => 'required',
            'Active' => 'required',
            'ApplyLink' => 'required',
            'CloseDate' => 'required',

        ]);

       
       $jobs = Job::create($job);

        return redirect()->route('admin')
        ->withSuccessMessage('Job Created Successfully');
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
    public function edit( Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([

            'Companyname'=>'required',
            'JobId' => 'required',
            'JobTitle' => 'required',
            'JobRole' => 'required',
            'Description' => 'required',
            'Positions' => 'required',
            'Location' => 'required',
            'AnnualSalary' => 'required',
            
            'Active' => 'required',
  
            'ApplyLink' => 'required',
            'CloseDate' => 'required',

        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')
        ->withSuccessMessage('Job Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
        ->withSuccessMessage('Job Deleted Successfully');
    }
/*
    public function changeStatus(Request $request, Job $job)
    {
        
        
        DB::table('jobs')->where('Active',0)->update(['Active' => 1]);
        
       
       
        $job->Active = $request->changeActive;
   
        $job->save();
        return redirect('jobs')->with('message', 'Status changed!');
    }

    */

    public function updateActive(Request $request)
    {
        
       
        
        $job = Job::find($request->job_id); 
        $job->Active = $request->Active;
        $job->save();
        return response()->json('message', 'Status changed!');
    }
}
