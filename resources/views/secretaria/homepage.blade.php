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
        <label for="corEtnia" class="col-sm-4 col-form-label"> Cor/etnia: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="corEtnia" placeholder="Insira sua cor/etnia" >
        </div>
    </div>

    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
    </div>

    {!! Form::close() !!}
@endsection
