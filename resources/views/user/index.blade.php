@extends('templates.master')

    <form action="{{ route('user.store', $user->id) }}" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="isAdm">
            <label class="form-check-label" for="gridCheck">
              Administrador
            </label>
          </div>
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
@endsection