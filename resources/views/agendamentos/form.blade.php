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
                    
                    {!! Form::open(['route' => 'agendamento.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            @include('templates.formulario.input', ['input' => 'descricao', 'attributes' => ['placeholder' => "Descrição"]])
                        </div>

                        <div class="form-group">
                            <label for="datahora">Data/Hora</label>
                            @include('templates.formulario.input', ['input' => 'datahora', 'attributes' => ['placeholder' => "Data/Hora"]])
                        </div>                        

                        <div class="form-group">
                            <label for="patient_id">Paciente</label>
                            {{ Form::select('patient_id', $client, Input::old('patient_id')) }}
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
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection