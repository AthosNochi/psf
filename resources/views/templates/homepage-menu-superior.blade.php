<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item" id="mudanav">
            <a class="nav-link" href="{{ route('user.index') }}">Agendamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('secretaria.index') }}">Novo Agendamento</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('psf.index') }}">Pacientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">SAIR</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-primary" href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Auto contraste</button>
        </li>
        <li class="nav-item">
            <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
        </li>
        <li class="nav-item">
            <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
        </li>
      </ul>
    </div>
  </nav>
  