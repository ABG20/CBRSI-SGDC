<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="dash-assets/img/logo/logo_cbrsi.jpg">
      </div>
      <div class="sidebar-brand-text mx-3"></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item ">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Menu
    </div>
    <li class="nav-item menu-items {{ (request()->is('inf') || request()->is('prof') || request()->is('voir')) ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Informations</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
          <a class="collapse-item {{ request()->is('inf') ? 'active' : '' }}" href="/inf">Personnelles</a>
          <a class="collapse-item {{ request()->is('prof') ? 'active' : '' }}" href="/prof">Professionnelles</a>
          <a class="collapse-item {{ request()->is('voir') ? 'active' : '' }}" href="/voir">Mon profil</a>

        </div>
      </div>
    </li>
    <li class="nav-item {{ (request()->is('these') || request()->is('equipe') || request()->is('diplome') || request()->is('document') || request()->is('traveau')) ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Dossier</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ request()->is('these') ? 'active' : '' }}"  href="/these">Thèses</a>
            <a class="collapse-item {{ request()->is('equipe') ? 'active' : '' }}"  href="/equipe">Equipe de thèse</a>
            <a class="collapse-item {{ request()->is('diplome') ? 'active' : '' }}"  href="/diplome">Diplôme</a>
            <a class="collapse-item {{ request()->is('document') ? 'active' : '' }}"  href="/document">Document exigés</a>
            <a class="collapse-item {{ request()->is('traveau') ? 'active' : '' }}"  href="/traveau"> Travaux</a>
        </div>
      </div>
    </li>
    <li class="nav-item {{ request()->is('recap') ? 'active' : '' }}">
      <a class="nav-link" href="/recap">
        <i class="fas fa-fw fa-thumbs-up"></i>
        <span>Transmission obligatoire</span>
      </a>
    </li>
    <li class="nav-item {{ request()->is('avis') ? 'active' : '' }}">
        @if (isset($Decision) AND count($Decision) > 0)
            <a class="nav-link" href="/avis">
                <i class="fas fa-fw fa-eye"></i>
                <span>Observation commission</span>
            </a>
        @else
            <p class="nav-link">
                <i class="fas fa-fw fa-eye"></i>
                <span>Observation commission</span>
            </p>
        @endif
    <span></span>

    </li>

    <li class="nav-item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-100 border-0">
            <a class="nav-link w-100">
                <i class="fas fa-fw fa-arrow-left"></i>
                <span>Deconnexion</span>
            </a>
        </button>
       </form>
    </li>

  </ul>
