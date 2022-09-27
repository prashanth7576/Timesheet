<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function index(){
        $inactive = Job::where('Active', 0)->count();
        $active = Job::where('Active', 1)->count();
        $data = Job::all();
        return view('vacancies', compact('data', 'active','inactive'));
    }
}
