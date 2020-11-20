@extends('templates.homepage-master')


@section('css-view')
@endsection

@section('js-conteudo-view')
@endsection

@section('conteudo-view')

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
{!! Form::open(['route' => 'agendamentos.store', 'method' => 'post', 'class' => 'text-center border border-light p-5']) !!}
  <div class="form-group row">
      <label for="descricao" class="col-sm-4 col-form-label"> Descrição:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" maxlength="255" name="descricao" placeholder="Descrição" required>
      </div>
  </div>
  <div class="form-group row">
    <label for="legenda" class="col-sm-4 col-form-label"> Legenda:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" maxlength="255" name="legenda" placeholder="Legenda" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="id_patient" class="col-sm-4 col-form-label">* Paciente:</label>
    <div class="col-sm-8">
      @include('templates.formulario.select', ['select' => 'id_patient', 'data' => $patient_list, 'attributes' => ['placeholder' => "Paciente", 'class' => 'form-control', 'required' => 'required']])
    </div>
  </div>
  <div class="form-group row">
    <label for="id_doctor" class="col-sm-4 col-form-label">* Médico:</label>
    <div class="col-sm-8">
      @include('templates.formulario.select', ['select' => 'id_doctor', 'data' => $doctor_list, 'attributes' => ['placeholder' => "Medico", 'class' => 'form-control', 'id' => 'id_doctor', 'onchange' => 'dateSelected()', 'required' => 'required' ]])
    </div>
	</div>
  <div class="form-group row">
    <label for="datahora" class="col-sm-4 col-form-label">* Data:</label>
    <div class="col-sm-8">
        <input class="form-control" maxlength="255" name="dataf" id="datepicker" onchange="dateSelected()">
        <input type="hidden" class="form-control" maxlength="255" name="data" required id="datefield" >
    </div>
  </div>
  <div class="form-group row">
    <label for="datahora" class="col-sm-4 col-form-label">* Hora:</label>
    <div class="col-sm-8"> 
	@include('templates.formulario.select', ['select' => 'hora', 'data' => [], 'attributes' => ['placeholder' => "Selecione um Médico e uma Data", 'class' => 'form-control', 'id' => 'hora' ]])
    </div>
  </div>    
                      
  <div class="modal-footer d-flex justify-content-center">
    <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
  </div>
  <div class="modal-footer d-flex justify-content-center">
    <a class="btn btn-primary" type="button"  onclick="JavaScript: history.go(-1);">Voltar</a>
  </div>
  @csrf
  {!! Form::close() !!}

    
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script>
	$(function() {
	$( "#datepicker" ).datepicker({
		dateFormat: 'dd/mm/yy',
		altField: "#datefield",
		altFormat: 'yy-mm-dd',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior',
		minDate:new Date(),
		maxDate: '+2m'});
	});
	</script>
	<script>
		function dateSelected() {
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				'processing': true, 
				'serverSide': false,
				  type: "POST",
				  data: { 
					  _token:'{{ csrf_token() }}',
					  dia_escolhido: $("#datefield").val(),
					  id_medico: $("#id_doctor").val()
				  },
				  url: "{{ route('availability.ajaxcall') }}",
				  success: function(s) {
					// alert(JSON.stringify(s));
					$('#hora').empty();
					
					$.each(s, function(index, element){
						if (element == true) {
							$('#hora').append($('<option></option>').text(index).val(index));
						}
					});
					
				  },
				  error: function(e) {
					  
					$('#hora').empty();
					$('#hora').append($('<option></option>').text("Selecione um Médico e uma Data").val(""));
				  }
			})
		}
		
		dateSelected();
	</script>
	@endsection