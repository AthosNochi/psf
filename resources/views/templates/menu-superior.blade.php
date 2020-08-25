<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
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
            <a class="nav-link" href="{{ route('agendamento.index') }}">Agendamentos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
