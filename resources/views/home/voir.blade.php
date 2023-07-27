<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tableau de bord</title>
  <link href="dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="dash-assets/css/ruang-admin.css" rel="stylesheet">

</head>

<body id="page-top" style="color: black;">
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.topbar')

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
      @include('layouts.footer')
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="dash-assets/vendor/jquery/jquery.min.js"></script>
  <script src="dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="dash-assets/js/ruang-admin.min.js"></script>
  <script src="dash-assets/vendor/chart.js/Chart.min.js"></script>
  <script src="dash-assets/js/demo/chart-area-demo.js"></script>

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
