@extends('templates.homepage-master')


@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

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
              <a class="nav-link" id="anamneseEnfermeiro" href="">Calendário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="anamneseEnfermeiro" href="">Novo Agendamento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="anamneseEnfermeiro" href="">Anameneses</a>
          </li>
      </ul>
      <li class="nav-item">
          <button class="btn btn-primary" href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Auto contraste</button>
      </li>
  </nav>

    {!! Form::open(['route' => 'anamnese.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    
    <div class="form-group row">
        <label for="name" id="name" class="col-sm-4 col-form-label">* Nome:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="name" placeholder="Insira seu nome completo" >
        </div>
    </div>

    <div class="form-group row">
        <label for="gender" id="gender" class="col-sm-4 col-form-label"> Gênero:</label>
        <label class="col-sm-4 col-form-label" id="masculino">Masculino
          <input type="radio" checked="checked" name="radio">
          <span class=""></span>
        </label>
        <label class="col-sm-4 col-form-label" id="feminino">Feminino
          <input type="radio" name="radio">
          <span class=""></span>
        </label>
        <label class="col-sm-4 col-form-label" id="outros">Outros
          <input type="radio" name="radio">
          <span class=""></span>
        </label>
    </div>

    <div class="form-group row">
        <label for="age" id="age" class="col-sm-4 col-form-label"> Idade: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="age" placeholder="Insira sua idade" >
        </div>
    </div>

    <input type="hidden" name="user_id" value="{{\Session::get('user_id')}}">

    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" id="mudabotao1" type="submit" name="submit" value="Enviar">
    </div>

    {!! Form::close() !!}
@endsection


<!-- salvar na anamnese quem preencheu os dados -->