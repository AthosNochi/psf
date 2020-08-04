<?php

namespace App\Http\Controllers;

use App\Entities\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients.lista')->with('patients', $patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = 'post';
        $patient = new Patient();
        return view('patients.form')->with('method', $method)
                                     ->with('paciente', $patient);
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
            'birth' => 'required',
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $patient = new Patient();
            $patient->name = $request->input('name');
            $patient->genre = $request->input('genre');
            $patient->birth = $request->input('birth');
            $patient->phone = $request->input('phone');
            $patient->address = $request->input('address');

            $patient->save();

            return redirect()->route('patient.index');
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
        $patient = Patient::find($id);
        return view('patients.form')->with('method', $method)
        ->with('patient', $patient);
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
            'name' => 'required|min:6',
            'birth' => 'required',
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $patient = Patient::find($id);
            $patient->name = $request->input('name');
            $patient->genre = $request->input('genre');
            $patient->birth = $request->input('birth');
            $patient->phone = $request->input('phone');
            $patient->address = $request->input('address');

            $patient->save();

            return redirect()->route('patients.index');
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
        $patient = Patient::find($id);

        $patient->delete();

        return redirect()->route('patients.index');
    }
}