<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::with('department')->find(10);

        echo $data->name;
        echo $data->phone;
        echo $data->department;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('employee.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->department_id = $request->department_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->save();


        return redirect(route("employee.index"));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
