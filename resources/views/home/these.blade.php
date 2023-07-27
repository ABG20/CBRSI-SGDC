<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tableau de bord</title>
  <link href="/dash/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/dash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/dash/css/ruang-admin.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="/dash/img/logo/logo_cbrsi.jpg">
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
      <li class="nav-item menu-items">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Informations</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item " href="/inf">Personnelles</a>
            <a class="collapse-item " href="/prof">Professionnelles</a>
            <a class="collapse-item" href="/voir">Mon profil</a>

          </div>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Dossier</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
           <a class="collapse-item active" href="/these">Thèses</a>
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
                <img class="img-profile rounded-circle" src="/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->nom}}</span>
              </a>

            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Informations sur la Thèse</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Thèse</li>
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
                  <form action="/traitement/these" method="POST" enctype="multipart/form-data">
                     @csrf
                      <div class="form-group">
                      <label class="form-label">Type *</label>
                      <select class="form-control" name="type" required>
                        <option value="Doctorat du troixieme cycle">Doctorat du troixieme cycle</option>
                        <option></option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label class="form-label">Titre *</label>
                      <input type="text" name="titre" class="form-control" placeholder="" value=" {{isset($these)? $these->titre : "" }}">
                    </div>
                     <div class="form-group">
                      <label class="form-label">Institution de soutenance *</label>
                      <input type="text" name="institution" class="form-control" placeholder="Intitulé/Ville/Pays" value="{{isset($these)? $these->institution : "" }}" required>
                    </div>
                     <div class="form-group">
                      <label class="form-label">Mention *</label>
                      <input type="text" name="mention" class="form-control" placeholder="" value="{{isset($these)? $these->mention : "" }}"required>
                    </div>
                     <div class="form-group">
                      <label class="form-label">Date de soutenance *</label>
                      <input type="date" name="date" class="form-control" placeholder="" value="{{isset($these)? $these->date : "" }}" required>
                    </div>
                     <div class="form-group">
                      <label class="form-label">Résultat obtenus pendant la thèse *</label>
                      <textarea class="form-control" name="resultat" required>
                        {{isset($these)? $these->resultat : "" }}
                      </textarea>
                    </div>
                     <div class="form-group">
                      <label class="form-label">Thèse *</label>
                      <input type="file" name="fichier" class="form-control" placeholder="" value="{{isset($these)? $these->fichier : "" }}" required>
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

  <script src="/dash/vendor/jquery/jquery.min.js"></script>
  <script src="/dash/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/dash/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/dash/js/ruang-admin.min.js"></script>
  <script src="/dash/vendor/chart.js/Chart.min.js"></script>
  <script src="/dash/js/demo/chart-area-demo.js"></script>
</body>

</html>
