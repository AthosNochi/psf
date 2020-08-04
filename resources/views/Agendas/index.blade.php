@extends('templates.master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

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
                    @foreach($agendas as $agenda)
                    @if ( $method ?? 'put' )
                    <form action="{{ route('agendas.update', $agendas->id) }}" method="post">
                        {{ csrf_field() }}                        
                        {{ method_field('PUT') }}
                    @else
                    
                    <form action="{{ route('agendas.store') }}" method="post">
                        {{ csrf_field() }}
                    @endif
                    
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input id="description" type="text" name="description" class="form-control" value="{{ $agenda->description }}"/>
                        </div>

                        <div class="form-group">
                            <label for="date">Data/Hora</label>
                            <input id="date" type="datetime-local" name="date" class="form-control" value="{{ strftime('%Y-%m-%dT%H:%M', strtotime($agenda->date)) }}"/>
                        </div>                        

                        <div class="form-group">
                            <label for="patient_id">Paciente</label>
                            <select name="patient_id" class="form-control" id="patient_id" value="{{ $agenda->id_patient }}">
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}" {{ $patient->id == $agenda->id_patient ? 'selected="selected"' : ''}}> {{ $patient->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="doctor_id">Médico</label>
                            <select name="doctor_id" class="form-control" id="doctor_id" value="{{ $agenda->id_doctor }}">
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" {{ $doctor->id == $agenda->id_doctor ? 'selected="selected"' : ''}}> {{ $doctor->name }}  {{ $doctor->specialty }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="subtitle">Legenda</label>
                            <input id="subtitle" type="text" name="subtitle" class="form-control" value="{{ $agenda->subtitle }}"/>
                        </div>
                        @endforeach
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
                        <a class="btn btn-default" href="{{ url('/agendas') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
//*@endsection



