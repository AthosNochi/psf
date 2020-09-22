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
                <a class="nav-link" id="anamneseEnfermeiro" href="">Anamneses</a>
            </li>
        </ul>

        <li class="nav-item">
          <button class="btn btn-primary" id="botaoEnfermeiro" type="button" id="botao2" onclick="mudaCorDeFundo()">Auto contraste</button> 
          <script> 
              function mudaCorDeFundo() {
              document.body.style.backgroundColor= "black";
    
              document.getElementById('corEtnia').style.backgroundColor = 'white';
              document.getElementById('corEtnia').style.fontFamily = "Arial";
              document.getElementById('corEtnia').style.fontSize = "larger";
    
              document.getElementById("estadoCivil").style.backgroundColor = 'white';
              document.getElementById('estadoCivil').style.fontFamily = "Arial";
              document.getElementById('estadoCivil').style.fontSize = "larger";
    
              document.getElementById("profissao").style.backgroundColor = 'white';
              document.getElementById('profissao').style.fontFamily = "Arial";
              document.getElementById('profissao').style.fontSize = "larger";
    
              document.getElementById("naturalidade").style.backgroundColor = 'white';
              document.getElementById('naturalidade').style.fontFamily = "Arial";
              document.getElementById('naturalidade').style.fontSize = "larger";
    
              document.getElementById('address').style.backgroundColor = 'white';
              document.getElementById('address').style.fontFamily = "Arial";
              document.getElementById('address').style.fontSize = "larger";

              document.getElementById('nomeMae').style.backgroundColor = 'white';
              document.getElementById('nomeMae').style.fontFamily = "Arial";
              document.getElementById('nomeMae').style.fontSize = "larger";

              document.getElementById('religiao').style.backgroundColor = 'white';
              document.getElementById('religiao').style.fontFamily = "Arial";
              document.getElementById('religiao').style.fontSize = "larger";

              document.getElementById('alergias').style.backgroundColor = 'white';
              document.getElementById('alergias').style.fontFamily = "Arial";
              document.getElementById('alergias').style.fontSize = "larger";
    
              document.getElementById('botaoEnfermeiro').style.backgroundColor = 'black';
              document.getElementById('botaoEnfermeiro2').style.backgroundColor = 'black';

              document.getElementById('anamneseEnfermeiro').style.Color = 'white';
              
              document.getElementById('mudalista').style.Color = 'white';
              
              //document.getElementsByTagName('nav').css('backgroundColor','black');
              //document.getElementById("muda").querySelectorAll("p").style.color = 'yellow'; 
            }
          </script>
    </nav>

    {!! Form::open(['route' => 'anamnese.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    
    <div class="form-group row">
        <label for="corEtnia" id="corEtnia" class="col-sm-4 col-form-label"> Cor/etnia: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="corEtnia" placeholder="Insira sua cor/etnia" >
        </div>
    </div>

    <div class="form-group row">
        <label for="estadoCivil" id="estadoCivil" class="col-sm-4 col-form-label"> Estado Civil:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="estadoCivil" placeholder="Insira seu estado civil" >
        </div>
    </div>

    <div class="form-group row">
        <label for="profissao" id="profissao" class="col-sm-4 col-form-label"> Profissão:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="profissao" placeholder="Insira sua profissao" >
        </div>
    </div>
    <div class="form-group row">
        <label for="naturalidade" id="naturalidade" class="col-sm-4 col-form-label"> Naturalidade:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="naturalidade" placeholder="Insira a cidade em que você nasceu">
        </div>
    </div>
    <div class="form-group row">
        <label for="address" id="address" class="col-sm-4 col-form-label"> Endereço:</label>
        <div class="col-sm-8">
            <input type="text"  class="form-control" maxlength="255" name="address" placeholder="Insira seu endereço">
        </div>
    </div>
    <div class="form-group row">
        <label for="nomeMae" id="nomeMae" class="col-sm-4 col-form-label"> Nome da Mãe:</label>
        <div class="col-sm-8">
            <input type="text"  class="form-control" maxlength="255" name="nomeMae" placeholder="Insira o nome de sua mãe">
        </div>
    </div>
    <div class="form-group row">
        <label for="religiao" id="religiao" class="col-sm-4 col-form-label"> Religião:</label>
        <div class="col-sm-8">
            <input type="text"  class="form-control" maxlength="255" name="religiao" placeholder="Insira sua religião">
        </div>
    </div>
    <div class="form-group row">
        <label for="alergias" id="alergias" class="col-sm-4 col-form-label"> Alergias:</label>
        <div class="col-sm-8">
            <input type="text"  class="form-control" maxlength="255" name="alergias" placeholder="Insira suas alergias(caso tenha)">
        </div>
    </div>
    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" id="botaoEnfermeiro2" type="submit" name="submit" value="Enviar">
    </div>
    {!! Form::close() !!}
    @endsection