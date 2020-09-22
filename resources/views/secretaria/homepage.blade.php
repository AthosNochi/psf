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
          <script> 
              function mudaCorDeFundo() {
              document.body.style.backgroundColor= "black";
    
              document.getElementById('name').style.backgroundColor = 'white';
              document.getElementById('name').style.fontFamily = "Arial";
              document.getElementById('name').style.fontSize = "larger";
    
              document.getElementById("gender").style.backgroundColor = 'white';
              document.getElementById('gender').style.fontFamily = "Arial";
              document.getElementById('gender').style.fontSize = "larger";
    
              document.getElementById("age").style.backgroundColor = 'white';
              document.getElementById('age').style.fontFamily = "Arial";
              document.getElementById('age').style.fontSize = "larger";
    
              document.getElementById("corEtnia").style.backgroundColor = 'white';
              document.getElementById('corEtnia').style.fontFamily = "Arial";
              document.getElementById('corEtnia').style.fontSize = "larger";
    
              document.getElementById('profissao').style.backgroundColor = 'white';
              document.getElementById('profissao').style.fontFamily = "Arial";
              document.getElementById('profissao').style.fontSize = "larger";
    
              document.getElementById("isAdm").style.backgroundColor = 'white';
              document.getElementById('name').style.fontFamily = "Arial";
              document.getElementById('name').style.fontSize = "larger";
    
              document.getElementById('botao1').style.backgroundColor = 'black';
    
              document.getElementById('botao2').style.backgroundColor = 'black';
              document.getElementById('name').style.fontFamily = "Arial";
            
              document.getElementById('name').style.fontSize = "larger";
    
              document.getElementById('mudalista').style.Color = 'white';
              document.getElementById('mudacor2').style.backgroundColor = 'black';
              document.getElementById('mudacor3').style.backgroundColor = 'black';
              
              //document.getElementsByTagName('nav').css('backgroundColor','black');
              //document.getElementById("muda").querySelectorAll("p").style.color = 'yellow'; 
            }
          </script>
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

    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" id="mudabotao1" type="submit" name="submit" value="Enviar">
    </div>

    {!! Form::close() !!}
@endsection
