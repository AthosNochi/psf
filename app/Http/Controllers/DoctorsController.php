<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.lista')->with('doctors', $doctors);
    }

    // API
    public function listaMedicos(){
        $doctors = Doctor::all();
        return response()->json($doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = 'post';
        $doctor = new Doctor();
        return view('doctors.form')->with('method', $method)
                                     ->with('doctor', $doctor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'crm' => 'required',
            'specialty' => 'required',
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $doctor = new Doctor();
            $doctor->name = $request->input('name');
            $doctor->crm = $request->input('crm');
            $doctor->specialty = $request->input('specialty');
            $doctor->phone = $request->input('phone');
            $doctor->save();

            return redirect()->route('doctors.index');
        }
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
        $method = 'put';
        $doctor = Doctor::find($id);
        return view('doctors.form')->with('method', $method)
        ->with('doctor', $doctor);
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
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'crm' => 'required',
            'specialty' => 'required',
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $doctor = Doctor::find($id);
            $doctor->name = $request->input('name');
            $doctor->crm = $request->input('crm');
            $doctor->specialty = $request->input('specialty');
            $doctor->phone = $request->input('phone');
            $doctor->save();

            return redirect()->route('doctors.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        
        $doctor->delete();
        
        return redirect()->route('doctors.index');
    }
}
