@extends('templates.master')

@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['label' => 'CPF','input' => 'cpf', 'attributes' => ['placeholder' => "CPF"]])
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => "Nome"]])
        @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => "Email"]])
        @include('templates.formulario.input', ['input' => 'rg', 'attributes' => ['placeholder' => "RG"]])
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => "Telefone"]])
        @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => "Senha"]])

            <label for="isAdm">Administrador
            <input type="checkbox" id="isAdm" name="isAdm"
                   checked>
            </label>
        

        @include('templates.formulario.submit', ['input' => 'Cadastrar'])    
    {!! Form::close() !!}

    <table class="default-table">
        <thead>
            <tr>
                <td>#</td>
                <td>CPF</td>
                <td>Nome</td>
                <td>RG</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>Administrador</td>
                <td>Menu</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->rg }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
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