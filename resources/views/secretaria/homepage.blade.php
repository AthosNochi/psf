@extends('templates.master')

@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif


    {!! Form::open(['route' => 'anamnese.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label">* Nome:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="name" placeholder="Insira seu nome completo" >
        </div>
    </div>
    <div class="form-group row">
        <label for="gender" class="col-sm-4 col-form-label"> Sexo:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="gender" placeholder="insira seu Genero" >
        </div>
    </div>
    <div class="form-group row">
        <label for="age" class="col-sm-4 col-form-label"> Idade: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="age" placeholder="Insira sua idade" >
        </div>
    </div>
    <div class="form-group row">
        <label for="corEtnia" class="col-sm-4 col-form-label"> Cor/Etnia:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="corEtnia" placeholder="Insira sua cor/etnia" >
        </div>
    </div>
    <div class="form-group row">
        <label for="estadoCivil" class="col-sm-4 col-form-label"> Estado Civil:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="estadoCivil" placeholder="Insira seu estado civil" >
        </div>
    </div>
    <div class="form-group row">
        <label for="profissao" class="col-sm-4 col-form-label"> Profissão:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="profissao" placeholder="Insira sua profissao" >
        </div>
    </div>
    <div class="form-group row">
        <label for="naturalidade" class="col-sm-4 col-form-label"> Naturalidade:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="naturalidade" placeholder="Insira a cidade em que você nasceu">
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-4 col-form-label"> Endereço:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="address" placeholder="Insira seu endereço">
        </div>
    </div>
    <div class="form-group row">
        <label for="nomeMae" class="col-sm-4 col-form-label"> Nome da mãe:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="nomeMae" placeholder="Insira o nome da sua mãe">
        </div>
    </div>
    <div class="form-group row">
        <label for="religiao" class="col-sm-4 col-form-label"> Religião:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="religiao" placeholder="Insira sua religião">
        </div>
    </div>
    <div class="form-group row">
        <label for="alergias" class="col-sm-4 col-form-label"> Alergias:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="alergias" placeholder="Caso tenha alergia insira qual" >
        </div>
    </div>
    <div class="form-group row">
        <label for="queixaPrincipal" class="col-sm-4 col-form-label"> Queixa principal:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="queixaPrincipal" placeholder="Insira a queixa principal">
        </div>
    </div>
    <div class="form-group row">
        <label for="historicoDoenca" class="col-sm-4 col-form-label">* Historico de doenças:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="historicoDoenca" placeholder="Insira seu histórico de doenças" >
        </div>
    </div>
    <div class="form-group row">
        <label for="sintomas" class="col-sm-4 col-form-label"> Sintomas:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="sintomas" placeholder="Insira os sintomas" >
        </div>
    </div>

    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
    </div>

    {!! Form::close() !!}

@endsection