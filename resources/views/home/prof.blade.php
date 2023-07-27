<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tableau de bord</title>
  <link href="dash/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="dash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="dash/css/ruang-admin.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="dash/img/logo/logo_cbrsi.jpg">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="/redirect">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item active menu-items">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Informations</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item " href="/inf">Personnelles</a>
            <a class="collapse-item active" href="/prof">Professionnelles</a>
            <a class="collapse-item" href="/voir">Mon profil</a>

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
      <li class="nav-item">
        <a class="nav-link" href="/recap">
          <i class="fas fa-fw fa-thumbs-up"></i>
          <span>Transmission obligatoire</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/avis">
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
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Task
                </h6>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Design Button
                      <div class="small float-right"><b>50%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Make Beautiful Transitions
                      <div class="small float-right"><b>30%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Create Pie Chart
                      <div class="small float-right"><b>75%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->nom}}</span>
              </a>

            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Informations sur la candidature</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Informations</li>
            </ol>
          </div>

  @if(session('status'))
          <div class="alert alert-success">
            {{ session('status')}}
          </div>
          @endif
<ul>
          @foreach($errors->all() as $errors)

       <li class="alert alert-danger"> {{ $errors}} </li>
          @endforeach


          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">



                </div>
                <div class="card-body">
                  <form action="/traitement/prof" method="POST">
                     @csrf
                    <div class="form-group">
                      <label for="">Matricule de la fonction publique *</label>
                      <input type="text" class="form-control"
                        placeholder="Entrer votre Matricule" name="matricule" required>
                    </div>
                    <div class="form-group">
                      <label for="section">Section *</label>
                      <select name="section" class="form-control" required>
                        <option value="Histoire des institutions">Histoire des institutions</option>
                        <option value="Droit privé">Droit privé</option>
                        <option value="Droit public">Droit public</option>
                        <option  value="Lettres et Sciences humaines">Lettres et Sciences humaines</option>
                        <option value="Sciences et Techniques de l'Ingénieur">Sciences et Techniques de l'Ingénieur </option>
                        <option value="Sciences Naturelles-Agronomie">Sciences Naturelles-Agronomie</option>
                        <option value="Science politique">Science politique</option>
                        <option value="Science économique">Science économique</option>
                        <option value="Science de gestion">Science de gestion</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="">Votre grade actuel *</label>
                       <select name="grade_act" class="form-control" required>
                         <option value="LAFCR">Chargé de recherche</option>
                         <option value="LAFMR">Maitre de recherche</option>
                         <option value="LAFDR">Directeur de recherche</option>
                       </select>
                      </div>

                    <div class="form-group">
                   <label class="form-label"> Grade au quel vous voulez postuler *</label>
                       <select name="grade_post" class="form-control" required>
                         <option value="LAFCR">Chargé de recherche</option>
                         <option value="LAFMR">Maitre de recherche</option>
                         <option value="LAFDR">Directeur de recherche</option>
                         <option> </option>
                       </select>
                    </div>
                      <div class="form-group">
                        <label class="form-label"> Votre Spécialité *</label>
                          <select name="specialite" class="form-control" required>
                            <option value="Géographie et environnement">Géographie et environnement</option>
                            <option value="Sociolinguistique et ethnolinguistique">Sociolinguistique et ethnolinguistique</option>
                            <option value="Psychopédagogie ( Sciences de l'Education)">Psychopédagogie ( Sciences de l'Education)</option>
                            <option value="Géographie humaine (Population/Environnement)">Géographie humaine (Population/Environnement)</option>
                            <option value="Sciences de Gestion">Sciences de Gestion  </option>
                            <option value="Mécanique-Energétique">Mécanique-Energétique</option>
                            <option value="Agronomie - Protection des Végétaux">Agronomie - Protection des Végétaux</option>
                            <option value="Agro-économie">Agro-économie</option>
                            <option value="Anglais (littérature et civilisation américaine)">Anglais (littérature et civilisation américaine)</option>
                            <option>Aménagement et gestion des ressources naturelles</option>
                            <option>Agronomie et environnement </option>
                            <option>Agronomie-Entomologie</option>
                            <option>Aménagement et gestion des ressources naturelles</option>
                            <option>Ecologie Appliquée </option>
                            <option>Ethique, philosophie morale et politique</option>
                            <option>Sociolinguistique et ethnolinguistique </option>
                            <option>Zootechnie (Productions animales) </option>
                            <option>Philosophie (politique et sociale)</option>
                            <option>Didactique des disciplines</option>
                            <option>Littérature et cinéma africains</option>
                            <option>Littérature Orale </option>
                            <option>Aménagement du territoire</option>
                            <option>Mathématiques</option>
                            <option>Physique</option>
                            <option>Phytopathologie</option>
                            <option>Chimie </option>
                            <option>Biologie</option>
                            <option>Géologie</option>
                            <option>Génie civil</option>
                            <option>Génie électrique</option>
                            <option>Génie mécanique</option>
                            <option>Génie chimique</option>
                            <option>Génie informatique</option>
                            <option>Médecine</option>
                            <option>Pharmacie</option>
                            <option>Odontologie</option>
                            <option>Médecine vétérinaire</option>
                            <option>Comptabilité</option>
                            <option>Marketing</option>
                            <option>Énergie renouvelable</option>
                            <option>Bibliothéconomie</option>
                            <option>Communication</option>
                            <option>Journalisme</option>
                          </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success">Valider</button>
                  </form>
                </div>
              </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white col-12">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script>|CBRSI
            </span>
          </div>
        </div>

      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="dash/vendor/jquery/jquery.min.js"></script>
  <script src="dash/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dash/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="dash/js/ruang-admin.min.js"></script>
  <script src="dash/vendor/chart.js/Chart.min.js"></script>
  <script src="dash/js/demo/chart-area-demo.js"></script>
</body>

</html>
