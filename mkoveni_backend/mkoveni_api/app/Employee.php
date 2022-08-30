<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  public $timestamps = false;

  protected $fillable = [
    'Employee Number',
    'First Name',
    'Surname',
    'Date of Birth',
    'Position',
    'Start Date',
    'Department',
    'Annual Salary',
    'Manager Employee Number',
    'Project Code 1',
    'Project Code 2',
    'Project Code 3',
  ];
}
