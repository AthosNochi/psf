@extends('templates.master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'doctor.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
    @include('templates.formulario.input', ['label' => 'CPF','input' => 'cpf', 'attributes' => ['placeholder' => "CPF"]])
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => "Nome"]])
        @include('templates.formulario.input', ['input' => 'rg', 'attributes' => ['placeholder' => "RG"]])
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => "Telefone"]])
        @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => "Email"]])
        @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => "Senha"]])
        @include('templates.formulario.input', ['input' => 'crm', 'attributes' => ['placeholder' => "CRM"]])
        @include('templates.formulario.input', ['input' => 'specialty', 'attributes' => ['placeholder' => "Especialidade"]])
        @include('templates.formulario.submit', ['input' => 'Cadastrar'])
    {!! Form::close() !!}
    <table class="default-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>rg</th>
                <th>CRM</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Especialidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->rg }}</td>
                <td>{{ $doctor->crm }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->specialty }}</td>
                <td>
                    {!! Form::open(['route' => ['doctor.destroy', $doctor->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection