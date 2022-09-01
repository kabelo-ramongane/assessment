<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;
use App\Employee;

class EmployeesExportController extends Controller
{
    public function export()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }

    function index()
   {
       $data = Employee::get(); //DB::table('employees');
       json_encode($data);
       return response()->json(['employees' => $data]);
   }
}
