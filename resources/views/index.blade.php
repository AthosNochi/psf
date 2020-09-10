<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de agendamento de consultas">
    <meta name="author" content="">

    <title>Sistema de Agendamento em PSF</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    
  <link rel="stylesheet" href= "{{ asset('site/style.css') }}">
  

  </head>

  <body>

  <script src="{{ asset('site/jquery.js') }}"></script>
  <script src="{{ asset('site/bootstrap.js') }}"></script>
 <!-- nesse ponto você acha o diretório site onde esta o jquery e o bootstrap
 
  <!-- Navigation -->
    <nav class="navbar navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">PSF</a>
        <a class="btn btn-primary" href="{{ url('/entrar') }}">Entrar</a>
      </div>

      <ul class="navbar-nav">
        <li class="nav-item">
          <button type="button" onclick="mudaCorDeFundo()">Auto contraste</button> 
            <script> 
              function mudaCorDeFundo() {
                document.getElementById('muda1').style.color = 'yellow';
                document.body.style.backgroundColor= "black";
                document.getElementsByTagName('h3').css('color','black');
                document.getElementById("mudap").querySelectorAll("p").style.color = 'yellow'; 
              }
            </script>
        </li>
      </ul>
    </nav>
    
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div id="mudap" class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3 id="muda1"> Multiplataforma</h3>
              <p id= class="lead mb-0">Layout responsivo, adapta a qualquer tamanho de tela!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Acessível</h3>
              <p class="lead mb-0">Sistema acessível para todos </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Intuitivo</h3>
              <p class="lead mb-0">Sistema intuitivo de fácil utilização, não requer nenhum treinamento</p>
            </div>
          </div>
        </div>
      </div>
    </section>

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