<?php

namespace App\Imports;

use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
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
            'Date of Birth' => $this->convertDate($row[3]),
            //'age' => $this->convertDate($row[3]),
            'Position' => $row[4],
            'Start Date' => $this->convertDate($row[5]),
            'Department' => $row[6],
            'Annual Salary' => $row[7],
            //'Bonus' => ((float)$row[7]*0.05),
            'Manager Employee Number' => $row[8],
            'Project Code 1' => $row[9],
            'Project Code 2' => $row[10],
            'Project Code 3' => $row[11],
        ]);
    }


    function convertDate($dateValue) {

      $unixDate = ((int)$dateValue - 25569) * 86400;
      return gmdate("Y-m-d", $unixDate);
    }

    //$phpdate = strtotime( $mysqldate );
    public function onError(Throwable $error)
    {

    }
}
