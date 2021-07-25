<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(Request $request){
        $employeeZeroFirstName = $request->input('employees.0.firstName');
        $allLastNames = $request->input('employees.*.lastName');
        $employeeOneAllData = $request->input('employees.1');
        var_dump($employeeZeroFirstName, $allLastNames, $employeeOneAllData);
    }
}
