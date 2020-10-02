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
                <a class="nav-link" id="anamneseDoctor" href="">Anamneses</a>
            </li>
        </ul>

        <li class="nav-item">
          <button class="btn btn-primary" id="botaoDoctor" type="button" id="botao2" onclick="mudaCorDeFundo()">Auto contraste</button> 
          <script> 
              function mudaCorDeFundo() {
              document.body.style.backgroundColor= "black";
    
              document.getElementById('queixaPrincipal').style.backgroundColor = 'white';
              document.getElementById('queixaPrincipal').style.fontFamily = "Arial";
              document.getElementById('queixaPrincipal').style.fontSize = "larger";

              document.getElementById('historicoDoenca').style.backgroundColor = 'white';
              document.getElementById('historicoDoenca').style.fontFamily = "Arial";
              document.getElementById('historicoDoenca').style.fontSize = "larger";

              document.getElementById('sintomas').style.backgroundColor = 'white';
              document.getElementById('sintomas').style.fontFamily = "Arial";
              document.getElementById('sintomas').style.fontSize = "larger";
    
              document.getElementById('botaoDoctor').style.backgroundColor = 'black';
              document.getElementById('botaoDoctor2').style.backgroundColor = 'black';

              document.getElementById('anamneseDoctor').style.Color = 'white';
              document.getElementById('name').style.fontFamily = "Arial";
            
              document.getElementById('mudalista').style.Color = 'white';

              //document.getElementsByTagName('nav').css('backgroundColor','black');
              //document.getElementById("muda").querySelectorAll("p").style.color = 'yellow'; 
            }
          </script>
    </nav>

    {!! Form::open(['route' => 'anamnese.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    
    <div class="form-group row">
        <label for="queixaPrincipal" id="queixaPrincipal" class="col-sm-4 col-form-label"> Queixa Principal: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="queixaPrincipal" placeholder="Insira sua cor/etnia" >
        </div>
    </div>

    <div class="form-group row">
        <label for="historicoDoenca" id="historicoDoenca" class="col-sm-4 col-form-label"> Histórico de doenças:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="historicoDoenca" placeholder="Insira seu historico de doenças" >
        </div>
    </div>

    <div class="form-group row">
        <label for="sintomas" id="sintomas" class="col-sm-4 col-form-label"> Sintomas:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="sintomas" placeholder="Insira seus sintomas" >
        </div>
    </div>
    
    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" id="botaoDoctor2" type="submit" name="submit" value="Enviar">
    </div>
    {!! Form::close() !!}
    @endsection

    <!-- salvar na anamnese quem preencheu os dados,
    e indicar se precisa de retorno da consulta ou receituário -->