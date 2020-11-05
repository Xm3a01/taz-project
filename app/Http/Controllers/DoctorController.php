<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Hospital;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // $table->string('name');
    // $table->string('phone_number');
    // $table->string('gender');


    public function index()
    {
        $doctors = Doctor::all();
        $hospitals = Hospital::all();
        return view('dashboard.doctors.index' , ['doctors' => $doctors , 'hospitals' => $hospitals]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
        ]);

        $doctor = Doctor::create($request->all());
        \Session::flash('success' , 'Doctor Successfully add');
        return redirect()->route('doctors.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $hospitals = Hospital::all();
        return view('dashboard.doctors.edit' , ['doctor' => $doctor , 'hospitals' => $hospitals]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        \Session::flash('success' , 'Doctor Successfully update');
        return redirect()->route('doctors.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        \Session::flash('success' , 'Doctor Successfully delete');
        return redirect()->route('doctors.index');       
    }
}
