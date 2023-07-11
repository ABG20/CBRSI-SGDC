<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <img src="dash/img/logo/logo_cbrsi.jpg">
      </div>
      <div class="sidebar-brand-text mx-3">CBRSI</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Menu
    </div>
    <li class="nav-item ">
      <a class="nav-link collapsed active" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Informations</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
          <a class="collapse-item" href="/inf">Personnelles</a>
          <a class="collapse-item" href="/prof">Professionnelles</a>
          <a class="collapse-item active" href="/voir">Mon profil</a>

        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Dossier</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="/these">Thèses</a>
           <a class="collapse-item" href="/equipe">Equipe de thèse</a>
          <a class="collapse-item" href="/diplome">Diplôme</a>
          <a class="collapse-item" href="/document">Document exigés</a>
           <a class="collapse-item" href="/traveau"> Travaux</a>

        </div>
      </div>
    </li>
    <li class="nav-item {{ Route::current() == 'recap' ? 'active' : ''}}">
      <a class="nav-link" href="/recap">
        <i class="fas fa-fw fa-thumbs-up"></i>
        <span>Transmission obligatoire</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-eye"></i>
        <span>Observation commission</span>
      </a>
    </li>
    <li class="nav-item">
      <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
        <a class="nav-link" href="{{ route('logout') }}" @click.prevent="$root.submit();">
            <i class="fas fa-fw fa-arrow-left"></i>
            <span>Deconnexion</span>
        </a>
       </form>
    </li>


  </ul>
  <!-- Sidebar -->
