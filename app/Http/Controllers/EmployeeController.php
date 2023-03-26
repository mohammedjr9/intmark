<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employee=Employee::paginate(5);
        return view('admin.Employee.index',compact('Employee',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Employee.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'name'=>'required',
            'addrss'=>'required',
            'Specialization'=>'required',

            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Employee::class],
            'phone' => ['required', 'int',  'unique:'.Employee::class],
        ]);
        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'employees');
            return redirect()->route('employees.index');
        }


        Employee::create($request->all());
        toastr()->success('Data has been saved successfully!', 'employees');
        return redirect()->route('employees.index');

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
    public function edit($id)
    {
        //
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
        $Employee=Employee::findOrFail($id);
        $validator = Validator($request->all(),[
            'name'=>'required',
            'addrss'=>'required',
            'Specialization'=>'required',
            'email' => ['required', 'string', 'email', 'max:255',Rule::unique('employees','email')->ignore($Employee->id)  ],
            'phone' => ['required', 'int',  Rule::unique('employees','phone')->ignore($Employee->id)],
        ]);;

        if ($validator->fails()){
            toastr()->error($validator->getMessageBag()->first(), 'employees');
            return redirect()->route('employees.index');
        }
        $Employee->update($request->all());
        toastr()->success('Data has been updated successfully!', 'employees');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        toastr()->success('Data has been deleted successfully!', 'employees');
        return redirect()->route('employees.index');
    }
}
