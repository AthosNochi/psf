<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button type="button" onclick="myFunction()">Auto contraste</button> 
        <script> function myFunction() { document.body.style.backgroundColor= "black"; } </script>
    </div>
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">Usuários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('psf.index') }}">Psf</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('doctor.index') }}">Médicos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('patient.index') }}">Pacientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('enfermeiro.index') }}">Efermeiros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agendamentos.index') }}">Agendamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">SAIR</a>
        </li>
      </ul>
    </div>
  </nav>
