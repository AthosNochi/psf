@extends('templates.master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label"> Nome:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="name" placeholder="Seu nome" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-4 col-form-label"> Endereço:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="address" placeholder="Endereço" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-4 col-form-label"> Telefone:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" maxlength="10" name="phone" placeholder="(99)9999-9999" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="regiao" class="col-sm-4 col-form-label"> Região</label>
        <div class="col-sm-6">
            <select class="form-control" id="regiao">
            <option>Sul</option>
            <option>Norte</option>
            <option>Leste</option>
            <option>Oeste</option>
            </select>
        </div>
    </div>
    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
    </div>

    <div class="panel">
        <table class="table" align="center">
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
    </div>
@endsection