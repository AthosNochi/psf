@extends('templates.homepage-master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" id="botao1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 

      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" id="anamneseEnfermeiro" href="">Meus dados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="anamneseEnfermeiro" href="">Meus Agendamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="anamneseEnfermeiro" href="">Novo Agendamento</a>
          </li>
      </ul>
      <li class="nav-item">
          <button class="btn btn-primary" href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Auto contraste</button>
      </li>
  </nav>

  {!! Form::open(['route' => 'agendamentos.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
  <div class="form-group row">
      <label for="descricao" id="descricaopaciente" class="col-sm-4 col-form-label"> Descrição:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" maxlength="255" name="descricao" placeholder="Descrição" required>
      </div>
  </div>
  <div class="form-group row">
    <label for="legenda" id="legendapaciente" class="col-sm-4 col-form-label"> Legenda:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" maxlength="255" name="legenda" placeholder="Legenda" required>
    </div>
</div>
<div class="form-group row">
  <label for="id_doctor" class="col-sm-4 col-form-label">* Médico:</label>
  <div class="col-sm-8">
    @include('templates.formulario.select', ['select' => 'id_doctor', 'data' => $doctor_list, 'attributes' => ['placeholder' => "Medico"]])
  </div>
</div> 

<!--colocar calendario somente com dia e horarios disponiveis -->
  <div class="form-group row">
    <label for="datahora" id="datahorapaciente" class="col-sm-4 col-form-label">* Data/Hora:</label>
    <div class="col-sm-8">
      <input type="datetime-local" id="meeting-time" 
      name="datahora"
      min="{{str_replace (" ","T", $horarios->datahorainicio)}}" max="{{$horarios->datahorafim}}">
      
    </div>
  </div>
  

  <div class="modal-footer d-flex justify-content-center">
    <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
  </div>
  {!! Form::close() !!}