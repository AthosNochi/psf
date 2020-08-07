@extends('templates.master')

@section('conteudo-view')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading painel_cab">
                    Faça o agendamento da consulta médica
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body">
                    
                    <form action="{{ route('agendamentos.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input id="descricao" type="text" name="descricao" class="form-control" value="{{ $agendamento->descricao }}"/>
                        </div>

                        <div class="form-group">
                            <label for="datahora">Data/Hora</label>
                            <input id="datahora" type="datetime-local" name="datahora" class="form-control" value="{{ strftime('%Y-%m-%dT%H:%M', strtotime($agendamento->datahora)) }}"/>
                        </div>                        

                        <div class="form-group">
                            <label for="patient_id">Paciente</label>
                            <select name="patient_id" class="form-control" id="patient_id" value="{{ $agendamento->id_patient }}">
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}" {{ $patient->id == $agendamento->id_patient ? 'selected="selected"' : ''}}> {{ $patient->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="medico_id">Médico</label>
                            <select name="medico_id" class="form-control" id="medico_id" value="{{ $agendamento->id_medico }}">
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" {{ $doctor->id == $agendamento->id_doctor ? 'selected="selected"' : ''}}> {{ $doctor->name }}  {{ $doctor->specialty }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="legenda">Legenda</label>
                            <input id="legenda" type="text" name="legenda" class="form-control" value="{{ $agendamento->legenda }}"/>
                        </div>
                        <!-- <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Compareceu
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Remarcou
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            Faltou
                          </label>
                        </div>   -->                

                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-default" href="{{ url('/agendamentos') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection