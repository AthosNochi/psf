@extends('templates.homepage-master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'anamnese.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    
    <div class="form-group row">
        <label for="corEtnia" id="corEtnia" class="col-sm-4 col-form-label"> Cor/etnia: </label>
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


    {!! Form::close() !!}
    @endsection