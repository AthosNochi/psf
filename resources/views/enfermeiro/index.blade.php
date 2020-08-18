@extends('templates.master')


@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    {!! Form::open(['route' => 'enfermeiro.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
    @include('templates.formulario.input', ['label' => 'CPF','input' => 'cpf', 'attributes' => ['placeholder' => "CPF"]])
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => "Nome"]])
        @include('templates.formulario.input', ['input' => 'rg', 'attributes' => ['placeholder' => "RG"]])
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => "Telefone"]])
        @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder' => "Email"]])
        @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => "Senha"]])

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
                <td>Menu</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($enfermeiros as $enfermeiro)
            <tr>
                <td>{{ $enfermeiro->id }}</td>
                <td>{{ $enfermeiro->cpf }}</td>
                <td>{{ $enfermeiro->name }}</td>
                <td>{{ $enfermeiro->rg }}</td>
                <td>{{ $enfermeiro->phone }}</td>
                <td>{{ $enfermeiro->email }}</td>

                <td>
                    {!! Form::open(['route' => ['enfermeiro.destroy', $enfermeiro->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection