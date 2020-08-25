<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de agendamento de consultas">
    <meta name="author" content="">

    <title>Sistema de Agendamento</title>
    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href= "{{ asset('site/bootstrap.css') }}">
  </head>

  <body>

  <script src="{{ asset('site/jquery.js') }}"></script>
  <script src="{{ asset('site/bootstrap.js') }}"></script>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Sistema de Agendamento</a>
        <a class="btn btn-primary" href="{{ url('/entrar') }}">Entrar</a>
      </div>
    </nav>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; </p>
          </div>
        </div>
      </div>
    </footer>
	
  </body>

</html>