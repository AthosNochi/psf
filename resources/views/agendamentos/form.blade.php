@extends('templates.master')

@section('conteudo-view')

{!! Form::open(['route' => 'agendamento.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
<div class="form-group row">
    <label for="descricao" class="col-sm-4 col-form-label"> Descrição:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" maxlength="255" name="descricao" placeholder="Descrição" required>
    </div>
</div>
<div class="form-group row">
  <label for="datahora" class="col-sm-4 col-form-label">* Data/Hora:</label>
  <div class="col-sm-8">
      <input type="datetime-local" class="form-control" maxlength="255" name="datahora" required>
  </div>
</div>
<div class="form-group row">
  <label for="id_patient" class="col-sm-4 col-form-label">* Paciente:</label>
  <div class="col-sm-8">
      <select class="form-control" id="$patient_list" required>
  </div>
</div>
<div class="form-group row">
  <label for="id_doctor" class="col-sm-4 col-form-label"> Médico:</label>
  <div class="col-sm-8">
      <select class="form-control" id="$doctor_list" required>
  </div>
</div>
<div class="form-group row">
  <label for="legenda" class="col-sm-4 col-form-label"> Legenda:</label>
  <div class="col-sm-8">
      <input type="text" class="form-control" maxlength="255" name="Legenda" placeholder="Legenda" required>
  </div>
</div>
<div class="modal-footer d-flex justify-content-center">
  <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
</div>

{!! Form::close() !!}
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

    <table class="default-table">
      <thead>
          <tr>
              <th>Id</th>
              <th>Descrição</th>
              <th>Data/Hora</th>
              
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
              
              
              <td>{{ $agendamento->legenda }}</td>
              <td>
                {!! Form::open(['route' => ['agendamento.destroy', $agendamento->id], 'method' => 'DELETE']) !!}
                <input class="btn btn-primary" type="submit" name="submit" value="Remover">
                {!! Form::close() !!}
            </td>
          <!-- <td><button class="btn btn-info demo" >Status</button></td> -->        
          </tr>
          @endforeach
      </tbody>
  </table>

@endsection


