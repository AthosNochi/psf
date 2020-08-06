<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PatientCreateRequest;
use App\Http\Requests\PatientUpdateRequest;
use App\Repositories\PatientRepository;
use App\Validators\PatientValidator;
use App\Services\PatientService;
use App\Entities\Patient;

/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    
    protected $service;
    protected $repository;
     
    public function __construct(PatientRepository $repository, PatientService $service)
    {
        $this->repository   = $repository;
        $this->service      = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $users = $this->repository->all();
        return view('patient.index')->with([
            'patients'=>$patients,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PatientCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PatientCreateRequest $request)
    {
        //$request = $this->service->store($request->all());//
        $patient = $request ['success'] ? $request['data'] : null;
        $patient = Patient::create($request->all());
        
        session()->flash('success', [
            'success'  => $request['success'],
            'messages' => $request['messages']
        ]);
        
        return redirect()->route('patient.index');
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
        $patient = $this->repository->find($id);
        
        if (request()->wantsJson()) {
            return response()->json([
                'data' => $patient,
            ]);
        }

        return view('patients.show', compact('patient'));
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
        $patient = $this->repository->find($id);

        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PatientUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PatientUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $patient = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'User updated.',
                'data'    => $patient->toArray(),
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
        $request = $this->service->destroy($id);

        session()->flash('success', [
            'success'  => $request['success'],
            'messages' => $request['messages']
        ]);
        
        return redirect()->route('patient.index');
    }
}
