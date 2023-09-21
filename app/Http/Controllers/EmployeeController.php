<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Http\Requests\Employee\EmployeeStoreRequest;
use App\Http\Requests\Employee\EmployeeUpdateRequest;
use App\Helpers\PermissionHelper;
use App\Helpers\GlobalHelper;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $employees = Employee::all(); // Retrieve all users from the database
        return view('employee.index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::get();
        return view ('employee.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $employee = new Employee;

         if ($request->has('pic')) {
            $destinationPath = 'images';
            $pic =  time().'.'.$request->pic->getClientOriginalExtension();
            $request->pic->move(public_path($destinationPath), $pic);
         }   
        
         $employee->pic=$pic;
         $employee->name = $request->name;
         $employee->email = $request->email;

         $employee->dep_id = $request->dep_id;


         $employee->save();
        return redirect()->route('employee.index')
            ->with('success', 'Employee has been created successfully.');        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    
        {
            $departments=Department::get();
        return view('employee.edit', compact('employee','departments'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
{
    $employee = Employee::find($id);

    if ($request->hasFile('pic')) {
        $destinationPath = 'images';
        $pic =  time().'.'.$request->pic->getClientOriginalExtension();
        $request->pic->move(public_path($destinationPath), $pic);
        $employee->pic = $pic; // Save the updated file name in the database
    }

    $employee->name = $request->name;
    $employee->email = $request->email;
    $employee->dep_id = $request->dep_id;
    $employee->save();

    return redirect()->route('employee.index')
        ->with('success', 'Employee Has Been updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'User deleted successfully.');
    }
}
