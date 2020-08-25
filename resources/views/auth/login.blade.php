@extends('login.app')

@section('content')
<div class="container">
    <div class="center">
      <h2 class="text-center">Ouvidoria Mec</h2>

      <hr>

      <br>

      <form class="text-center border border-light p-5" method="post" action={{route('login')}}>
        @csrf
        <p class="h4 mb-4">Login</p>
        <input type="email" name="email" class="form-control mb-4" placeholder="email@dominio.com">
        <input type="password" name="password" class="form-control mb-4" placeholder="Senha">
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
      </form>

    </div>
</div>
@endsection
