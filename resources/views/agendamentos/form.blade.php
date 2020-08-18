@extends('templates.master')

@section('conteudo-view')

    {!! Form::open(['route' => 'agendamento.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
      @include('templates.formulario.input', ['input' => 'descricao', 'attributes' => ['placeholder' => "Descrição"]])

      <label for="datahora">Data/hora:
      <input type="datetime-local" name="datahora"/>
        </label>
        
      @include('templates.formulario.select', ['select' => 'id_patient', 'data' => $patient_list, 'attributes' => ['placeholder' => "Paciente"]])
      @include('templates.formulario.select', ['select' => 'id_doctor', 'data' => $doctor_list, 'attributes' => ['placeholder' => "Medico"]])               
      @include('templates.formulario.input', ['input' => 'legenda', 'attributes' => ['placeholder' => "Legenda"]])
        

         <!-- <input id="datahora" type="datetime-local" name="birthdaytime"> -->
        
      
                        
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

      @include('templates.formulario.submit', ['input' => 'Salvar'])
    {!! Form::close() !!}

    <table class="default-table">
      <thead>
          <tr>
              <td>#</td>
              <td>Descrição</td>
              <td>Data/Hora</td>
              <td>Paciente</td>
              <td>Médico</td>
              <td>legenda</td>
              <td>Menu</td>
          </tr>
      </thead>
      <tbody>
          @foreach ($agendamentos as $agendamento)
          <tr>
              <td>{{ $agendamento->id }}</td>
              <td>{{ $agendamento->descricao }}</td>
              <td>{{ $agendamento->datahora }}</td>
              <td>{{ $agendamento->patient }}</td>
              <td>{{ $agendamento->doctor }}</td>
              <td>{{ $agendamento->legenda }}</td>

              <td>
                  {!! Form::open(['route' => ['enfermeiro.destroy', $enfermeiro->id], 'method' => 'DELETE']) !!}
                  {!! Form::submit('Remover') !!}
                  {!! Form::close() !!}
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
                
            
        
@endsection