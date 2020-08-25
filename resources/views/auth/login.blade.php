@extends('login.app')

@section('content')
<div class="container">
    <div class="center">
      <h2 class="text-center">Sistema de Agendamento em PSF</h2>

      <hr>

      <br>

      <form class="text-center border border-light p-5" method="post" action={{route('login')}}>
        @csrf
        <p class="h4 mb-4">Login</p>
        <input type="email" name="email" class="form-control mb-4" placeholder="email@dominio.com">
        <input type="password" name="password" class="form-control mb-4" placeholder="Senha">
        <input type="submit" class="btn btn-info btn-block my-4" value="Enviar"/>
        <div class="form-group">
            <div class="my-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4 my-4">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
      </form>

    </div>
</div>
@endsection
