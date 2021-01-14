<?php

namespace App\Http\Controllers;

use App\Imports\ImportStudent;
use App\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
    	$student = Student::all();

    	return view('import', compact('student'));
    }

     public function upload(Request $request)
    {
    	Excel::import(new ImportStudent(), $request->file('student'));
    	return back();
    }
}

