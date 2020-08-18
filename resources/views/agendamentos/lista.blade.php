@extends('templates.master')
@section('conteudo-view')
@if (session('success'))
<h3>{{ session('success')['messages'] }}</h3>
@endif

    @foreach ($agendamentos as $agendamento)
        <table id="agendamento_table" class="table table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Data/Hora</th>
                    <th>Paciente</th>
                    <th>Descrição</th>
                    <th>Médico</th>
                    <th>Especialidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <th>Legenda</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ date("d/m/Y H:i:s", strtotime($agendamento->datahora)) }}</td>
                    <td>{{ $agendamento->patient->name }}</td>
                    <td>{{ $agendamento->descricao }}</td>
                                
                    <td>{{ $agendamento->doctor->name }}</td>
                    <td>{{ $agendamento->doctor->specialty }}</td>
                    <td><a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a></td>
                        <td>
                        <form action="{{ route('agendamentos.destroy', $agendamento->id ) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></button>
                        </form>
                    </td> 
                        <td>{{ $agendamento->legenda }}</td>
                <!-- <td><button class="btn btn-info demo" >Status</button></td> -->        
                </tr>
                @endforeach
            </tbody>
        </table>
        @endforeach

 <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; Renato de Oliveira Lucena 2018</p>
          </div>
        </div>
      </div>
    </footer>
@endsection
