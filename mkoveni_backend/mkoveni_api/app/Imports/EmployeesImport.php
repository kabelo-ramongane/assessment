<?php

namespace App\Imports;

use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class EmployeesImport implements ToModel, SkipsOnError
{
    //use App\Imports\UsersImport;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'Employee Number' => $row[0],
            'First Name' => $row[1],
            'Surname' => $row[2],
            'Date of Birth' => $row[3],
            'Position' => $row[4],
            'Start Date' => $row[5],
            'Department' => $row[6],
            'Annual Salary' => $row[7],
            'Manager Employee Number' => $row[8],
            'Project Code 1' => $row[9],
            'Project Code 2' => $row[10],
            'Project Code 3' => $row[11],
        ]);
    }

    public function onError(Throwable $error)
    {
      
    }
}
