@extends('templates.homepage-master')

@section('conteudo-view')
    @if (session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif
	@if($errors->any())
		<h4>{{$errors->first()}}</h4>
    @endif
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/homepage-Secretaria">Home</a>
        <button class="navbar-toggler" id="botao1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
  
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="" href="/homepage-Secretaria/agendamentos" >Calendário</a>
            </li>
            <li>
                <a class="nav-link" id="" href="/homepage-Secretaria/pacientes">Pacientes</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" id="" href="/homepage-Secretaria/anamneses">Anameneses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="" href="/homepage-Secretaria/horarios">Horarios</a>
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
                  {{Auth::guard('secretaria')->user()->name}} <span class="caret"></span>
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
    {!! Form::open(['route' => 'availability.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
    <div class="form-group row">
    <label for="id_doctor" class="col-sm-4 col-form-label">* Médico:</label>
    <div class="col-sm-8">
      @include('templates.formulario.select', ['select' => 'id_medico', 'data' => $doctor_list, 'attributes' => ['placeholder' => "Medico", 'class' => 'form-control', 'required' => 'required']])
    </div>
  </div>  
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Tempo de Consulta:</label>
		<div class="col-sm-8 input-group">
		<input type="text" class="form-control" maxlength="255" name="consulta" placeholder="15">
			<div class="input-group-append">
			  <div class="input-group-text">minutos</div>
			</div>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Domingo:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[0]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Segunda-Feira:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[1]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Terça-Feira:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[2]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Quarta-Feira:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[3]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Quinta-Feira:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[4]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Sexta-Feira:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[5]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Sábado:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[6]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
	<div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Feriados:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="disponibilidade[7]" placeholder="7-11:45;13:30-18">
        <small class="form-text text-left text-muted">
		  Insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
	<div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Adições:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="adicoes" placeholder="[19/11]11-13">
        <small class="form-text text-left text-muted">
		  Digite as datas (dd/mm) entre [colchetes], insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
	<div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Exclusões:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" maxlength="255" name="exclusoes" placeholder="[24/12];[30/12]15-17;[31/12]">
        <small class="form-text text-left text-muted">
		  Digite as datas (dd/mm) entre [colchetes], insira os horários de início e fim separados por um traço, separe os blocos de horário com ponto-e-vírgula.
		</small>
		</div>
    </div>
    <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
    </div>
    {!! Form::close() !!}

    <div class="panel">
        <table class="table" align="center">
        <thead>
            <tr>
                <th>Médico</th>
				<th>Tempo de Consulta</th>
                <th>Disponibilidade</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($availabilities as $availability)
            <tr>
                <td>{{ $doctor_list[$availability->id_medico] }}</td>
                <td>{{ $availability->consulta }} minutos</td>
                <td>@foreach (json_decode($availability->disponibilidade) as $key => $available)
						@switch($key)
							@case(1)
							<p>Segunda:{{ $available }}</p>
								@break
							@case(2)
							<p>Terça:{{ $available }}</p>
								@break
							@case(3)
							<p>Quarta:{{ $available }}</p>
								@break
							@case(4)
							<p>Quinta:{{ $available }}</p>
								@break
							@case(5)
							<p>Sexta:{{ $available }}</p>
								@break
							@case(6)
							<p>Sabado:{{ $available }}</p>
								@break
							@case(0)
							<p>Domingo:{{ $available }}</p>
								@break
							@case(7)
							<p>Feriados:{{ $available }}</p>
								@break

						@endswitch
					@endforeach
				</td>
                <td>
                    {!! Form::open(['route' => ['availability.destroy', $availability->id], 'method' => 'DELETE']) !!}
                    <input class="btn btn-primary" type="submit" name="submit" value="Remover">
                    {!! Form::close() !!}
                </td>
                
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection