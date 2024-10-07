<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.data')->with([
            'students' => Students::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        $validatedData = $request->validated();

        $students = new Students;
        $students->idstudents = $request->txtid;
        $students->fullname = $request->txtfullname;
        $students->address = $request->txtaddress;
        $students->gender = $request->txtgender;
        $students->phone = $request->txtphone;
        $students->email = $request->txtemail;
        $students->save();

        return redirect('students')->with('msg', 'Add New Students Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
