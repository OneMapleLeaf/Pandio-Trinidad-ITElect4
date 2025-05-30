<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employees = employee::get();

        return view ('employee.index', compact('employees'));
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
       

        employee::create($request->all());
        return view('employee.create');
    }

   

}
