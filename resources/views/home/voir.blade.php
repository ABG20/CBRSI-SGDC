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

<body id="page-top" style="color: black;">
  <div id="wrapper">
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
        <a class="nav-link" href="/redirect">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item active">
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

          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Informations</h6>
                </div>
                <div class="card-body">
                      <div class="row">
               <div class="col-2">
                 <img id="photoPreview" src="{{'/storage/photos/'.$Candidat->photo}}" alt="Aperçu de la photo" width="100">
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Nom</strong>
               </div>
               <div class="col-2">
                 {{Auth::user()->nom}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Prenom</strong>
               </div>
               <div class="col-2">
                 {{Auth::user()->prenom}}
               </div>
               </div>
                <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Email</strong>
               </div>
               <div class="col-4">
                 {{Auth::user()->email}}
               </div>
               </div>
                <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Téléphone</strong>
               </div>
               <div class="col-2">
                 {{Auth::user()->telephone}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Civilité</strong>
               </div>
               <div class="col-2">
                 {{$Candidat->civilte}}
               </div>
               </div>
                <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Titre</strong>
               </div>
               <div class="col-4">
                 {{$Candidat->type}}
               </div>
               </div>
              <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Adresse</strong>
               </div>
               <div class="col-2">
                 {{$Candidat->adresse}}
               </div>
               </div>
                <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Date de naissance</strong>
               </div>
               <div class="col-2">
                {{date('d-m-Y', strtotime($Candidat->date_nais))}}
               </div>
               </div>
                <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Ville de naissance</strong>
               </div>
               <div class="col-2">
                 {{$Candidat->ville_nais}}
               </div>
               </div>
                <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Nationalité</strong>
               </div>
               <div class="col-2">
                 {{$Candidat->nationalite}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Matricule</strong>
               </div>
               <div class="col-2">
                 {{$Dossier->matricule}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Section</strong>
               </div>
               <div class="col-2">
                 {{$Dossier->section}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Grade actuel</strong>
               </div>
               <div class="col-2">
                 {{$Dossier->grade_act}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Grade voulu</strong>
               </div>
               <div class="col-2">
                 {{$Dossier->grade_post}}
               </div>
               </div>
               <hr>
                  <div class="row">
               <div class="col-2">
                 <strong>Spécialité</strong>
               </div>
               <div class="col-8">
                 {{$Dossier->specialite}}
               </div>
               </div>
               <br>
               <div>
                 <a href="/modifier/{{$Candidat->id}}" class="btn btn-success">Modifier </a>
               </div>
                </div>
              </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white col-12">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> |CBRSI
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

  <script>


    // Récupérer les éléments du formulaire
const photoInput = document.getElementById('photoInput');
const photoPreview = document.getElementById('photoPreview');

// Écouter les changements dans le champ de sélection de fichier
photoInput.addEventListener('change', function(event) {
  const file = event.target.files[0];

  if (file) {
    // Créer un objet URL pour la photo sélectionnée
    const imageURL = URL.createObjectURL(file);

    // Afficher l'aperçu de la photo
    photoPreview.src = imageURL;
  }
});
  </script>
</body>

</html>
