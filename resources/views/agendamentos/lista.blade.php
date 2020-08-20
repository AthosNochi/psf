        <table class="default-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Data/Hora</th>
                    <th>Paciente</th>
                    <th>Médico</th>
                    <th>Especialidade</th>
                    <th>Legenda</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ $agendamento->descricao }}</td>
                    <td>{{ date("d/m/Y H:i:s", strtotime($agendamento->datahora)) }}</td>
                    <td>{{ $agendamento->patient->name }}</td>
                    <td>{{ $agendamento->doctor->name }}</td>
                    <td>{{ $agendamento->doctor->specialty }}</td>
                    <td>{{ $agendamento->legenda }}</td>

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
