<?php

namespace App\Http\Controllers;

use App\User;
use App\Booking;
use App\Hospital;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        $bookings = Booking::all();
        $users = User::all();

        $bookings->load(['user' , 'hospital']);
        return view('dashboard.bookings.index' , [
            'bookings' => $bookings,
            'hospitals' => $hospitals,
            'users' => $users
            ]);
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
            'patient_name' => 'required',
            'patient_phone' => 'required',
            'user_id' => 'required',
            'date_of_booking' => 'required',
            'hospital_id' => 'required' 
        ]);

        Booking::create($request->all());
        \Session::flash('success' , 'Booking successfuly add');
        return redirect()->route('bookings.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $hospitals = Hospital::all();
        $users = User::all();

        $booking->load(['user' , 'hospital']);
        return view('dashboard.bookings.edit' , [
            'booking' => $booking, 
            'hospitals' => $hospitals,
            'users' => $users
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        \Session::flash('success' , 'Booking Successfully update');
        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        \Session::flash('success' , 'Booking Successfully update');
        return redirect()->route('bookings.index');
    }
}
