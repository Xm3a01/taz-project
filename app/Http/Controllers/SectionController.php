<?php

namespace App\Http\Controllers;

use App\Section;
use App\Hospital;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        $sections->load('hospital');
        $hospitals = Hospital::all();
        return view('dashboard.sections.index' , ['sections' => $sections , 'hospitals' => $hospitals]);
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
            'hospital_id' => 'required'
        ]);

        Section::create($request->all());
        \Session::flash('success' , 'Section successfuly add');
        return redirect()->route('sections.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $hospitals = Hospital::all();
        return view('dashboard.sections.edit' , ['section' => $section , 'hospitals' => $hospitals]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $section->update($request->all());
        \Session::flash('success' , 'Section Successfully update');
        return redirect()->route('sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        \Session::flash('success' , 'Section Successfully update');
        return redirect()->route('sections.index');
    }
}
