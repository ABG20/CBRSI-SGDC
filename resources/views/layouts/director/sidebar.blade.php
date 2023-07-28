<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="background: ">
      <div class="sidebar-brand-icon">
        <img src="/dash-assets/img/logo/logo_cbrsi.jpg">
      </div>
      <div class="sidebar-brand-text mx-3">CBRSI</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Menu
    </div>
    <li class="nav-item {{ request()->is('etude') ? 'active' : '' }}">
      <a class="nav-link collapsed" href="/etude"  data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Decision </span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">

      </div>
    </li>
    <li class="nav-item {{ request()->is('listcand') ? 'active' : '' }}">
      <a class="nav-link" href="/listcand">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Liste des candidats</span>
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
