
<nav class="navbar navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.index') }}">Usuários</a>
        <a class="navbar-brand" href="{{ route('psf.index') }}">Psf</a>
        <a class="navbar-brand" href="{{ route('doctor.index') }}">Médicos</a>
        <a class="navbar-brand" href="{{ route('patient.index') }}">Pacientes</a>
    </div>
      
        
        <li>
            <a href="{{ route('patient.index') }}">
                <i class"""></i>
                <h3>Pacientes</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('enfermeiro.index') }}">
                <i class"""></i>
                <h3>Enfermeiro</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('agendamento.index') }}">
                <i class"""></i>
                <h3>Agendamento</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="alert-link">
                <i class"""></i>
                <h3>Sair</h3>
            </a>
        </li>
    </ul>
</nav>
