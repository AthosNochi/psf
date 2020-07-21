<?php

namespace App\Http\Controllers;

use App\Agendas;
use App\Patient;
use App\Doctor;
use Illuminate\Http\Request;

class AgendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::all();
        return view('agendas.lista')->with('agendas', $agendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = 'post';
        $agenda = new Agenda();
        $patient = Patient::all();
        $doctors = Doctor::all();

        return view('agendas.form')->with('patients', $patients)
                                        ->with('doctors', $doctors)
                                        ->with('method', $method)
                                        ->with('agenda', $agenda);
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
            'description' => 'required|min:5',
            'date' => 'required',
            'patient_id' => 'required',
            'doctor_id' => 'required', 
            'subtitle' => 'required',            
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $agenda = new Agenda();
            $agenda->description = $request->input('description');
            $agenda->date = $request->input('date');
            $agenda->id_patient = $request->input('patient_id');
            $agenda->id_doctor = $request->input('doctor_id');
            $agenda->subtitle = $request->input('subtitle');
            $agenda->save();

            return redirect()->route('agendas.index');
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
        $agenda = Agenda::find($id);
        $patients = Patient::all();
        $doctors = Doctor::all();        
        return view('agendas.form')->with('method', $method)
                                        ->with('agenda', $agenda)
                                        ->with('patients', $patients)
                                        ->with('doctors', $doctors);
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
            'description' => 'required|min:5',
            'date' => 'required',
            'patient_id' => 'required',
            'doctor_id' => 'required', 
            'subtitle' => 'required',           
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $agenda = Agenda::find($id);
            $agenda->description = $request->input('description');
            $agenda->date = $request->input('date');
            $agenda->id_patient = $request->input('patient_id');
            $agenda->id_doctor = $request->input('doctor_id');
            $agenda->subtitle = $request->input('subtitle');
            $agenda->save();

            return redirect()->route('agendas.index');
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
        $agenda = Agenda::find($id);
        
        $agenda->delete();

        return redirect()->route('agendas.index');
    }
}