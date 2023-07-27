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

<body id="page-top">
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.topbar')
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

</body>

</html>
