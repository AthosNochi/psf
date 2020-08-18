@extends('templates.master')

@section('conteudo-view')

    {!! Form::open(['route' => 'agendamento.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
      @include('templates.formulario.input', ['input' => 'descricao', 'attributes' => ['placeholder' => "Descrição"]])

      <label for="datahora">Data/hora:
      <input type="datetime-local" name="datahora"/>
        </label>
        
      @include('templates.formulario.select', ['select' => 'id_patient', 'data' => $patient_list, 'attributes' => ['placeholder' => "Paciente"]])
      @include('templates.formulario.select', ['select' => 'id_doctor', 'data' => $doctor_list, 'attributes' => ['placeholder' => "Medico"]])               
      @include('templates.formulario.input', ['input' => 'legenda', 'attributes' => ['placeholder' => "Legenda"]])
        

         <!-- <input id="datahora" type="datetime-local" name="birthdaytime"> -->
        
      
                        
                        <!-- <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Compareceu
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Remarcou
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            Faltou
                          </label>
                        </div>   -->                

      @include('templates.formulario.submit', ['input' => 'Salvar'])
    {!! Form::close() !!}


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