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
              <th>Id</th>
              <th>Descrição</th>
              <th>Data/Hora</th>
              <th>Paciente</th>
              <th>Médico</th>
              <th>Especialidade</th>
              <th>Legenda</th>
              <th>Opções</th>
          </tr>
      </thead>
      <tbody>
          @foreach($agendamentos as $agendamento)
          <tr>
              <td>{{ $agendamento->id }}</td>
              <td>{{ $agendamento->descricao }}</td>
              <td>{{ date("d/m/Y H:i:s", strtotime($agendamento->datahora)) }}</td>
              <td>{{ $agendamento->name }}</td>
              <td>{{ $agendamento->doctor->name }}</td>
              <td>{{ $agendamento->doctor->specialty }}</td>
              <td>{{ $agendamento->legenda }}</td>

              <td><a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a></td>
                  <td>
                  <form action="{{ route('agendamentos.destroy', $agendamento->id ) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></button>
                  </form>
              </td> 
                  <td>{{ $agendamento->legenda }}</td>
          <!-- <td><button class="btn btn-info demo" >Status</button></td> -->        
          </tr>
          @endforeach
      </tbody>
  </table>

@endsection


