@extends('templates.master')


@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    <div class="form-group row">
        <label for="Nome" class="col-sm-4 col-form-label">* Nome:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="name" placeholder="Seu nome" required>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">Nome:</label>
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => "Nome"]])
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">Email:</label>
        @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => "Email"]])
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">Senha</label>
        @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => "Senha"]])
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">CPF:</label>
        @include('templates.formulario.input', ['input' => 'cpf', 'attributes' => ['placeholder' => "CPF"]])
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">RG:</label>
        @include('templates.formulario.input', ['input' => 'rg', 'attributes' => ['placeholder' => "RG"]])
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">Telefone:</label>
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => "Telefone"]])
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <label for="Nome" class="col-sm-4 col-form-label">Admnistrador:</label>
        @include('templates.formulario.checkbox', ['input' => 'isAdm', 'attributes' => ['placeholder' => "isAdm"]])
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>    {!! Form::close() !!}

    <table class="default-table">
        <thead>
            <tr>
                <td>#</td>
                <td>Nome</td>
                <td>Email</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Telefone</td>
                <td>Administrador</td>
                <td>Menu</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->rg }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->isAdm }}</td>
                <td>
                    {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection