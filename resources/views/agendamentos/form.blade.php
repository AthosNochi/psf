@extends('templates.master')

@section('conteudo-view')

    {!! Form::open(['route' => 'agendamento.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
        @include('templates.formulario.input', ['input' => 'descricao', 'attributes' => ['placeholder' => "Descrição"]])
        
        @include('templates.formulario.select', ['select' => 'id_patient', 'data' => $patient_list, 'attributes' => ['placeholder' => "Paciente"]])
        @include('templates.formulario.select', ['select' => 'id_doctor', 'data' => $doctor_list, 'attributes' => ['placeholder' => "Medico"]])               
        @include('templates.formulario.input', ['input' => 'legenda', 'attributes' => ['placeholder' => "Legenda"]])
        

        <label for="birthdaytime">(date and time):</label>
        <input type="datetime-local" id="datahora" value="datahora" name="birthdaytime">

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection