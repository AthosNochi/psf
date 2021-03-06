@extends('templates.homepage-master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/homepage-medico">Home</a>
        <button class="navbar-toggler" id="botao1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="calendarioDoctor" href="<?= url('/homepage-medico/agendamentos'); ?>">Calendário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="anamneseDoctor" href="<?= url('/homepage-medico/anamneses'); ?>">Anamneses</a>
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
                {{Auth::guard('doctor')->user()->name}} <span class="caret"></span>
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


    <h1 id="areamedico" style="font-size:5vw;">Area do Médico</h1>
    <h1 id="areamedico2" style="font-size:5vw;">Bem vindo(a)</h1>
    <h1 id="mnome" style="font-size:5vw;">{{Auth::guard('doctor')->user()->name}}</h1>
    
  
    @endsection

    <!-- salvar na anamnese quem preencheu os dados,
    e indicar se precisa de retorno da consulta ou receituário -->