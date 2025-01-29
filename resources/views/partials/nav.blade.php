{{-- ! execution du code n --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Social Network</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="{{route('homepage')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('profiles.index') }}">Tous Les Profiles</a>          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/profile">Mon Profile</a>          </li>
          <li class="nav-item">
            <a  class="nav-link"  href="{{ route('settings.index') }}">Mes informations</a>
        </li>

        </ul>
      </div>
    </div>
  </nav>


