<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;

class EmployeesExportController extends Controller
{
    public function export()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
}
