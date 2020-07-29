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
        $this->validator    = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $agenda = new \stdClass();
        $agenda->id = 0;
        $agenda->description = '';
        $agenda->date = date('Y-m-d');
        $agenda->id_patient = '';
        $agenda->id_doctor = '';
        $agenda->subtitle = '';
        $patients = Patient::all();
        $doctors = Doctor::all();
        //$agendas = Agenda::all();
        //return redirect()->to('/agenda');
        $agendas = $this->repository->all();
        //return redirect()->route('agendas.index');

       // $agendas = $this->repository->all();
       // return view('agendas.form', compact('agendas'));
       return view('agendas.index', compact('agendas', 'agenda', 'patients', 'doctors'));
            
        
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
    public function store(AgendaCreateRequest $request)
    {
         //$request    = $this->service->store($request->all());//
         $agenda        = $request ['success'] ? $request['data'] : null;
         $agenda        = Agenda::create($request->all());
         
         session()->flash('success', [
             'success'  => $request['success'],
             'messages' => $request['messages']
         ]);
         
         return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agenda = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $agenda,
            ]);
        }

        return view('agendas.show', compact('agenda'));
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
        $agendas = $this->repository->all();
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