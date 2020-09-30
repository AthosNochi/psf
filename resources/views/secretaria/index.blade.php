@extends('templates.master')


@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'secretaria.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    <div class="form-group row">
        <label for="name" id="name" class="col-sm-4 col-form-label">* Nome:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="name" placeholder="Insira seu nome completo" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" id="email" class="col-sm-4 col-form-label">* E-mail:</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" maxlength="255" name="email" placeholder="exemplo@email.com" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" id="password" class="col-sm-4 col-form-label"> Senha:</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" maxlength="255" name="password" placeholder="Escolha uma senha" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="cpf" id="cpfsecretaria" class="col-sm-4 col-form-label">* CPF:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" maxlength="11" name="cpf" placeholder="000.000.000-00" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="rg" id="rgsecretaria" class="col-sm-4 col-form-label">* RG:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" maxlength="9" name="rg" placeholder="00.000.000-0" required>
        </div>
    </div> 
    <div class="form-group row">
        <label for="phone" id="phone" class="col-sm-4 col-form-label">* Telefone:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" maxlength="10" name="phone" placeholder="(99)9999-9999" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" id="enderecosecretaria" class="col-sm-4 col-form-label"> Endereço:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="address" placeholder="Endereço" required>
        </div>
    </div>
    
    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
    </div>

    {!! Form::close() !!}

    <div class="panel">
        <table class="table" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($secretarias as $secretaria)
            <tr>
                <td>{{ $secretaria->id }}</td>
                <td>{{ $secretaria->name }}</td>
                <td>{{ $secretaria->address }}</td>
                <td>{{ $secretaria->phone }}</td>
                <td>
                    {!! Form::open(['route' => ['secretaria.destroy', $secretaria->id], 'method' => 'DELETE']) !!}
                    <input class="btn btn-primary" type="submit" name="submit" value="Remover">
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection