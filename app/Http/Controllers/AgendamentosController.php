<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AgendamentoCreateRequest;
use App\Http\Requests\AgendamentoUpdateRequest;
use App\Repositories\AgendamentoRepository;
use App\Validators\AgendamentoValidator;
use App\Entities\Agendamento;
use App\Entities\Patient;
use App\Entities\Doctor;

/**
 * Class AgendamentosController.
 *
 * @package namespace App\Http\Controllers;
 */
class AgendamentosController extends Controller
{
    /**
     * @var AgendamentoRepository
     */
    protected $repository;

    /**
     * @var AgendamentoValidator
     */
    protected $validator;

    /**
     * AgendamentosController constructor.
     *
     * @param AgendamentoRepository $repository
     * @param AgendamentoValidator $validator
     */
    public function __construct(AgendamentoRepository $repository, AgendamentoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos.form')->with('agendamentos', $agendamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AgendamentoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */


    public function create()
    {
        $method = 'post';
        $agendamento = new Agendamento();
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('agendamentos.form')->with('patients', $patients)
                                        ->with('doctors', $doctors)
                                        ->with('method', $method)
                                        ->with('agendamento', $agendamento);
    }


    public function store(AgendamentoCreateRequest $request)
    {
        $agendamentos = new Agendamento();
            $agendamentos->descricao = $request->input('descricao');
            $agendamentos->datahora = $request->input('datahora');
            $agendamentos->id_paciente = $request->input('patient_id');
            $agendamentos->id_medico = $request->input('doctor_id');
            $agendamentos->legenda = $request->input('legenda');
            $agendamentos->save();

            return redirect()->route('agendamentos.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agendamento = $this->repository->find($id);

        return view('agendamentos.edit', compact('agendamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AgendamentoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AgendamentoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $agendamento = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Agendamento updated.',
                'data'    => $agendamento->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Agendamento deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Agendamento deleted.');
    }
}
