@extends('templates.homepage-master')


@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/homepage-enfermeiro">Home</a>
      <button class="navbar-toggler" id="botao1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 

      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" id="" href="/homepage-enfermeiro/agendamentos" >Calendário</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="" href="/homepage-enfermeiro/anamneses">Anameneses</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-primary" href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Auto contraste</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-primary" name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-primary" name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{Auth::guard('enfermeiro')->user()->name}} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
          </li>
      </ul>
    </nav>

    
    <div class="panel">
      <table class="table" align="center">
      <thead>
          <tr>
              <th>Paciente</th>
              <th>Genero</td>
              
              <th>Idade</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
      </thead>
      <tbody>
          @foreach ($anamneses as $anamnese)
          <tr>
              <td>{{ $patient_list[$anamnese->name] }}</td>
              <td>{{ $anamnese->gender }}</td>
              
              <td>{{ $anamnese->age }}</td>

              <td>
                {!! Form::open(['route' => ['anamnese.destroy', $anamnese->id], 'method' => 'DELETE']) !!}
                <input class="btn btn-primary" type="submit" name="submit" value="Remover">
                {!! Form::close() !!}
              </td>
              <td>
              <a href="{{ route('anamnese.edit', $anamnese->id) }}"> Editar</a>
              </td>
              <td>
                <a href="{{ route('anamnese.show', $anamnese->id) }}"> Detalhes</a>
              </td>
          </tr>
          @endforeach
      </tbody>
      </table>
  </div>
  <a class="btn btn-primary" href="/homepage-enfermeiro/nova-anamnese">Nova Anamnese</a>
  <input type="button" class="btn btn-primary" value="Atualizar" onClick="document.location.reload(true)">
@endsection


<!-- salvar na anamnese quem preencheu os dados -->

    
    <!-- salvar na anamnese quem preencheu os dados -->