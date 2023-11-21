<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use DataTables;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::select(['id', 'first_name', 'last_name', 'email', 'phone', 'company_id'])
                ->with('company') // assuming you have a relationship set up in the Employee model
                ->get();

            return Datatables::of($data)
                ->addColumn('company_name', function ($employee) {
                    return $employee->company->name;
                })
                ->addColumn('action', function ($employee) {
                    $viewUrl = route('employees.show', $employee->id);
                    $editUrl = route('employees.edit', $employee->id);
                    $deleteUrl = route('employees.destroy', $employee->id);

                    return '<a href="' . $viewUrl . '" class="btn btn-info btn-sm">View</a> ' .
                           '<a href="' . $editUrl . '" class="btn btn-primary btn-sm">Edit</a> ' .
                           '<form method="post" action="' . $deleteUrl . '" style="display:inline;">' .
                           csrf_field() .
                           method_field('DELETE') .
                           '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure?\')">Delete</button>' .
                           '</form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('admin.employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $employee = new Employee;
        $employee->fill($request->validated());
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $companies = Company::all();
        $employee = Employee::findOrFail($id);
        return view('admin.employees.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->fill($request->validated());
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
