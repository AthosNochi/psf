<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AgendaCreateRequest;
use App\Http\Requests\AgendaUpdateRequest;
use App\Repositories\AgendaRepository;
use App\Validators\AgendaValidator;
use App\Services\AgendaService;
use App\Entities\Agenda;
use App\Entities\Patient;
use App\Entities\Doctor;

class AgendasController extends Controller
{
    protected $service;
    protected $repository;
    protected $validator;
     
    public function __construct(AgendaRepository $repository, AgendaService $service, AgendaValidator $validator)
    {
        $this->repository   = $repository;
        $this->service      = $service;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$agendas = Agenda::all();
        //return redirect()->to('/agenda');
        //return redirect()->route('agenda.lista');

        //$agendas = $this->repository->all();
        return view('agendas.form', compact('agendas'));
       // return view('agendas.form')->with([
       //     'agendas'=>$agendas,
       // ]);

       
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

            //return redirect()->to('/agenda');
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

           // return redirect()->to('/agenda');
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

        //return redirect()->to('/agenda');
    }
}