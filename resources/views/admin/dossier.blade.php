<html>
<head>
    <link rel="stylesheet" href="{!!asset('dist/css/bootstrap.min.css')!!}">
    <title>Table de bord</title>
</head>
<body>


<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col">
            <img id="photoPreview" src="{{'/storage/photos/'.$candidat->photo}}" alt="Aperçu de la photo" width="200">
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-4">
               Nom:
        </div>
        <div class="col">
            {{$candidat->nom}}
        </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-4">
                   Prénom:
            </div>
            <div class="col">
                {{$candidat->prenom}}
            </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                       Email:
                </div>
                <div class="col">
                    {{$candidat->email}}
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                           Téléphone:
                    </div>
                    <div class="col">
                        {{$candidat->telephone}}
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                               Civilité
                        </div>
                        <div class="col">
                            {{$candidat->civilte}}
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                   Titre:
                            </div>
                            <div class="col">
                                {{$candidat->type}}
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                       Adresse:
                                </div>
                                <div class="col">
                                    {{$candidat->adresse}}
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                           Date de naissance:
                                    </div>
                                    <div class="col">
                                        {{date('d-m-Y', strtotime($candidat->date_nais))}}
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-4">
                                               Ville de naissance:
                                        </div>
                                        <div class="col">
                                            {{$candidat->ville_nais}}
                                        </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-4">
                                                   Nationalité:
                                            </div>
                                            <div class="col">
                                                {{$candidat->nationalite}}
                                            </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-4">
                                                       Matricule:
                                                </div>
                                                <div class="col">
                                                    {{$candidat->matricule}}
                                                </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-4">
                                                           Section:
                                                    </div>
                                                    <div class="col">
                                                        {{$candidat->section}}
                                                    </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-4">
                                                               Garde actuel du candidat:
                                                        </div>
                                                        <div class="col">
                                                            {{$candidat->grade_act}}
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                   Grade voulu:
                                                            </div>
                                                            <div class="col">
                                                                {{$candidat->grade_post}}
                                                            </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                       Spécialité:
                                                                </div>
                                                                <div class="col">
                                                                    {{$candidat->specialite}}
                                                                </div>
                                                                </div>
                                                                <hr>

</div>


    <div class="container text-center">
        <br>
        <br>
        <br>

        <div>


        </div>
        <div class="card" style="width: 70rem;">



<br>
<h1 style="text-align:center; margin-left:10px; font-weight:bold; font-size: 30px;">Thèse</h1>

      <table class="table table-bordered">

<tr class="table-success" style="color: white;">
<th>Type</th>
<th>Titre</th>
<th>Institut d'obtention</th>
<th>Date</th>
<th>Thèse</th>
</tr>
@foreach($theses as $these)
<tr style="color: white;">
<td>{{$these->type}}</td>
<td>{{$these->titre}}</td>
<td>{{$these->institution}}</td>
<td>{{$these->date}}</td>
<td><a href="{{'/storage/these/'. $these->fichier}}" target="_blank" class="btn btn-success">Voir</a></td>
</tr>
@endforeach
      </table>
<br>
<br>
<h1 style="text-align:center; margin-left:10px; font-weight:bold; font-size: 30px;"> Diplôme</h1>
<br>

<table class="table table-bordered">

<tr class="table-success" style="color: white;">
<th>Nom</th>
<th>Pays</th>
<th>Années</th>
<th>Institut d'obtention</th>
<th>Diplôme</th>
</tr>
@foreach($diplomes as $diplome)
<tr style="color: black;">
<td>{{$diplome->nom}}</td>
<td>{{$diplome->pays}}</td>
<td>{{$diplome->annee}}</td>
<td>{{$diplome->institut}}</td>
<td><a href="{{'/storage/diplome/'. $diplome->fichier}}" target="_blank" class="btn btn-success">Voir</a></td>
</tr>
@endforeach

<table>
<br>
<br>
<h1 style="text-align:center; margin-left:10px; font-weight:bold; font-size: 30px;"> Document</h1>

<table class="table table-bordered">
<tr class="table-success" style="color: white;">
<th>Nom</th>
<th>Piéce</th>
</tr >
@foreach($dossiers as $dossier)
<tr style="color: black;">
<td>{{$dossier->nom}}</td>
<td><a href="{{'/storage/pieces/'. $dossier->fichier}}" target="_blank" class="btn btn-success">Voir</a></td>
</tr>
@endforeach
</table>
<br>
<br>

<form action="/traitement/decision/{{$candidat->id}}" method="POST">
    @csrf
<div>
    <center>
<label for="" class="form-label" style="color: black;font-size:15px;" >Décision</label></center>
<br>
<textarea name="commentaire" id=""  class="form-control" required></textarea>
</div>
<br>
<br>
<div>
    <button type="submit" class="btn btn-success"  onclick="return confirm('vous avez vraiment fini? ')">Valider</button>
</div>
</form>
<br>
<br>
</div>



</body>


</html>






{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CIL</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!!asset('assets/vendors/mdi/css/materialdesignicons.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/vendors/css/vendor.bundle.base.css')!!}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{!!asset('assets/vendors/jvectormap/jquery-jvectormap.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')!!}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{!!asset('assets/css/style.css')!!}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{!!asset('assets/images/favicon.png')!!}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <img src="{!!asset('dash/img/logo/logo_cbrsi.jpg')!!}" width="100" style="background: white;">

        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                <div class="profile-name">
                  <x-app-layout>



                 </x-app-layout>
                </div>
              </div>

              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/redirect">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item active menu-items ">
            <a class="nav-link"  href="/cil">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Etudier dossier</span>
            </a>
            <div class="collapse" id="ui-basic">
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Décision</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">


              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div>


                  <x-app-layout>



                   </x-app-layout>



                </div>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <h1 style="text-align:center; margin-left:400px; font-weight:bold; font-size: 30px;"> Etudier de dossiers</h1>
              <br>
              <br>
              <div class="col-12 grid-margin stretch-card">
                <div>

               <div >

               </div>



              </div>

                  </div>
                </div>


<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"> <img id="photoPreview" src="{{'/storage/photos/'.$candidat->photo}}" alt="Aperçu de la photo" width="100"> </p>
                    <div class="template-demo">
        <h1 style="font-size: 20px;">Nom:  <small >{{$candidat->nom}} </small>
                      </h1>
                      <h1 style="font-size: 20px;">Prénom :<small >{{$candidat->prenom}} </small>
                      </h1>
                      <h1 style="font-size: 20px;"> Email: <small>{{$candidat->email}} </small>
                      </h1 >
                      <h1 style="font-size: 20px;"> Téléphone :<small> {{$candidat->telephone}} </small>
                      </h1>
                      <h1 style="font-size: 20px;">Civilité :<small> {{$candidat->civilte}} </small>
                      </h1>
                      <h1 style="font-size: 20px;"> Titre :<small> {{$candidat->type}} </small> </h1>

                      <h1 style="font-size: 20px;"> Adresses :<small> {{$candidat->adresse}} </small> </h1>

                      <h1 style="font-size: 20px;">Date de naissance :<small> {{date('d-m-Y', strtotime($candidat->date_nais))}} </small> </h1>

                      <h1 style="font-size: 20px;"> Ville de naissance :<small> {{$candidat->ville_nais}} </small> </h1>

                      <h1 style="font-size: 20px;"> Nationalité :<small> {{$candidat->nationalite}} </small> </h1>

                      <h1 style="font-size: 20px;"> Matricule :<small> {{$candidat->matricule}} </small> </h1>

                      <h1 style="font-size: 20px;"> Section :<small> {{$candidat->section}} </small>
                      </h1>
                      <h1 style="font-size: 20px;"> Grade actuel :<small> {{$candidat->grade_act}} </small> </h1>
                      <h1 style="font-size: 20px;">Grade voulu :<small> {{$candidat->grade_post}} </small> </h1>
                      <h1 style="font-size: 20px;"> Spécialité :<small> {{$candidat->specialite}} </small> </h1>

                    </div>
                  </div>
                </div>
              </div>
              <br>
              <h1 style="text-align:center; margin-left:10px; font-weight:bold; font-size: 30px;">Thèse</h1>
              <table class="table">

                <tr class="bg-success" style="color: white;">
                      <table class="table">

<tr class="bg-success" style="color: white;">
    <th>Type</th>
  <th>Titre</th>
  <th>Institut d'obtention</th>
  <th>Date</th>
<th>Thèse</th>
</tr>
@foreach($theses as $these)
<tr style="color: white;">
    <td>{{$these->type}}</td>
    <td>{{$these->titre}}</td>
    <td>{{$these->institution}}</td>
    <td>{{$these->date}}</td>
    <td><a href="{{'/storage/these/'. $these->fichier}}" target="_blank" class="btn btn-success">Voir</a></td>
</tr>
@endforeach
                      </table>
              <br>
              <br>
              <h1 style="text-align:center; margin-left:10px; font-weight:bold; font-size: 30px;"> Diplôme</h1>
            <br>

             <table class="table">

<tr class="bg-success" style="color: white;">
  <th>Nom</th>
  <th>Pays</th>
  <th>Années</th>
   <th>Institut d'obtention</th>
  <th>Diplôme</th>
</tr>
@foreach($diplomes as $diplome)
<tr style="color: white;">
    <td>{{$diplome->nom}}</td>
    <td>{{$diplome->pays}}</td>
    <td>{{$diplome->annee}}</td>
    <td>{{$diplome->institut}}</td>
    <td><a href="{{'/storage/diplome/'. $diplome->fichier}}" target="_blank" class="btn btn-success">Voir</a></td>
</tr>
@endforeach

<table>
<br>
<br>
<table class="table">
<tr class="bg-success" style="color: white;">
    <th>Nom</th>
    <th>Piéce</th>
</tr >
@foreach($dossiers as $dossier)
<tr style="color: white;">
    <td>{{$dossier->nom}}</td>
    <td><a href="{{'/storage/pieces/'. $dossier->fichier}}" target="_blank" class="btn btn-success">Voir</a></td>
</tr>
@endforeach
</table>
<br>
<br>

<form action="" method="POST">
<div>
    <label for="" class="form-label">Décision</label>
    <br>
   <textarea name="" id="" cols="30" rows="10"></textarea>
</div>

</form>
<br>
<br>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © CBRSI</span>

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{!!asset('assets/vendors/js/vendor.bundle.base.js')!!}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{!!asset('assets/vendors/chart.js/Chart.min.js')!!}"></script>
    <script src="{!!asset('assets/vendors/progressbar.js/progressbar.min.js')!!}"></script>
    <script src="{!!asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')!!}"></script>
    <script src="{!!asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')!!}"></script>
    <script src="{!!asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')!!}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{!!asset('assets/js/off-canvas.js')!!}"></script>
    <script src="{!!asset('assets/js/hoverable-collapse.js')!!}"></script>
    <script src="{!!asset('assets/js/misc.js')!!}"></script>
    <script src="{!!asset('assets/js/settings.js')!!}"></script>
    <script src="{!!asset('assets/js/todolist.js')!!}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{!!asset('assets/js/dashboard.js')!!}"></script>
    <!-- End custom js for this page -->
  </body>
</html> --}}
