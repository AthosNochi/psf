@extends('templates.master')

    <form action="{{ route('user.store') }}" method="post">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome"  value="{{ $user->name }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="rg">RG</label>
            <input id="rg" type="text" name="rg" value="{{ $user->rg }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input id="cpf" type="text" name="cpf" value="{{ $user->cpf }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input id="phone" type="text" name="phone" value="{{ $user->phone }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ $user->email }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="password">Email</label>
            <input id="password" type="password" name="password" value="{{ $user->password }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label class="form-check-label" for="gridCheck">
                Administrador
            </label>
        <input id="isAdm"  type="checkbox" name="isAdm" value="{{ $user->isAdm }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

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
