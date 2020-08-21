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
                <!-- <td><button class="btn btn-info demo" >Status</button></td> -->        
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection
