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
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.topbar')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
          </div>
        <div class="row">
            <div class="col-12" style="background: #3CAD46; border-radius: 20px; padding: 15px; color: black;">
                <h1> Bienvenue  <strong>{{Auth::user()->nom}} {{Auth::user()->prenom}} </strong>vous pouvez télécharger le Quide d'utilisation <a href="">«« ici»»</a> </h1>
            </div>
        </div>
    </div>

    @include('layouts.footer')
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
