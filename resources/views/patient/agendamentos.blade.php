@extends('templates.homepage-master')

@section('conteudo-view')

    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="homepage-paciente">Home</a>
      <button class="navbar-toggler" id="botao1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 

      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" id="anamneseEnfermeiro" href="/homepage-paciente/meus-dados">Meus dados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="anamneseEnfermeiro" href="/homepage-paciente/meus-agendamentos">Meus Agendamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="anamneseEnfermeiro" href="/homepage-paciente/novo-agendamento">Novo Agendamento</a>
          </li>
          <li class="nav-item" id="mudanav">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
            </a>
  
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
      </ul>
      <li class="nav-item">
          <button class="btn btn-primary" href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Auto contraste</button>
      </li>
  </nav>
  <div class="panel">
    <table class="table" align="center">
      <thead>
        
          <tr>
              <th>Legenda</th>
              <th>Descrição</th>
              <th>Data/Hora</th>
              <th>Paciente</th>
              
             
              <th>Opções</th>
          </tr>
      </thead>
      <tbody>
        @foreach($agendamentos as $agendamento)
        <tr>
            <td>{{Auth::guard('patient')->user()->$agendamento->legenda}}</td>
            
         </tr>

         @endforeach
          
      </tbody>
    </table>
  </div>
@endsection