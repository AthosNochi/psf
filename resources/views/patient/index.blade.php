@extends('templates.master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'patient.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['label' => 'CPF','input' => 'cpf', 'attributes' => ['placeholder' => "CPF"]])
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => "Nome"]])
        @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => "Email"]])
        @include('templates.formulario.input', ['input' => 'rg', 'attributes' => ['placeholder' => "RG"]])
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => "Telefone"]])
        @include('templates.formulario.input', ['input' => 'birth', 'attributes' => ['placeholder' => "Nascimento"]])
        @include('templates.formulario.input', ['input' => 'gender', 'attributes' => ['placeholder' => "Genero"]])
        @include('templates.formulario.input', ['input' => 'notes', 'attributes' => ['placeholder' => "Notas"]])
        @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => "Senha"]])
        
        @include('templates.formulario.submit', ['input' => 'Cadastrar'])    
    {!! Form::close() !!}

    <table class="default-table">
        <thead>
            <tr>
                <td>#</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Nascimento</td>
                <td>Genero</td>
                <td>Notas</td>
                
                <td>Menu</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $Patient->id }}</td>
                <td>{{ $Patient->cpf }}</td>
                <td>{{ $Patient->rg }}</td>
                <td>{{ $Patient->name }}</td>
                <td>{{ $Patient->email }}</td>
                <td>{{ $Patient->phone }}</td>
                <td>{{ $Patient->birth }}</td>
                <td>{{ $Patient->gender }}</td>
                <td>{{ $Patient->notes }}</td>
                <td>
                    {!! Form::open(['route' => ['patient.destroy', $patient->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection