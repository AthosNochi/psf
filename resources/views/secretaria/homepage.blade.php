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
              <a class="nav-link" href="">Anamneses</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="">Agendamentos</a>
            </li>
          </ul>
    
        <li class="nav-item">
          <button class="btn btn-primary" type="button" id="botao2" onclick="mudaCorDeFundo()">Auto contraste</button> 
    </nav>

    {!! Form::open(['route' => 'anamnese.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    
    <div class="form-group row">
        <label for="name" id="name" class="col-sm-4 col-form-label">* Nome:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="name" placeholder="Insira seu nome completo" >
        </div>
    </div>

    <div class="form-group row">
        <label for="gender" id="gender" class="col-sm-4 col-form-label"> Genero:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="gender" placeholder="insira seu Genero" >
        </div>
    </div>

    <div class="form-group row">
        <label for="age" id="age" class="col-sm-4 col-form-label"> Idade: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="age" placeholder="Insira sua idade" >
        </div>
    </div>

    <input type="hidden" name="secretaria_id" value="{{\Session::get('id');}}">

    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" id="mudabotao1" type="submit" name="submit" value="Enviar">
    </div>

    {!! Form::close() !!}
@endsection


<!-- salvar na anamnese quem preencheu os dados -->