<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function importData(Request $request){

        $this->validate($request, ['uploaded_file' => 'required|file|mimes:xls,xlsx']);
        $the_file = $request->file('uploaded_file');

        Excel::import(new EmployeesImport, $the_file);

        return redirect('/')->with('success', 'All good!');

    }

    public function updateData(Request $request){

        $this->validate($request, ['uploaded_file' => 'required|file|mimes:xls,xlsx']);
        $the_file = $request->file('uploaded_file');

        //Excel::import(new EmployeesImport, $the_file);

        return redirect('/')->with('success', 'All good!');

    }
}
