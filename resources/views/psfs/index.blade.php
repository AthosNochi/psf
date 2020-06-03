@extends('templates.master')


@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
    {!! Form::open(['route' => 'psf.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => "Nome"]])
        @include('templates.formulario.input', ['input' => 'endereco', 'attributes' => ['placeholder' => "Endereço"]])
        @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder' => "Telefone"]])
        @include('templates.formulario.input', ['input' => 'regiao', 'attributes' => ['placeholder' => "Região"]])
        @include('templates.formulario.submit', ['input' => 'Cadastrar'])
    {!! Form::close() !!}
    <table class="default-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Região</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($psfs as $psf)
            <tr>
                <td>{{ $psf->id }}</td>
                <td>{{ $psf->name }}</td>
                <td>{{ $psf->endereco }}</td>
                <td>{{ $psf->phone }}</td>
                <td>{{ $psf->regiao }}</td>
                <td>{{ $psf->permission }}</td>
                <td>
                    {!! Form::open(['route' => ['psf.destroy', $psf->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection