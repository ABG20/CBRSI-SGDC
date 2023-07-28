<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Listes</title>
  <link href="dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="dash-assets/css/ruang-admin.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
      @include('layouts.admin.sidebar')
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          @include('layouts.admin.topbar')
        <!-- Container Fluid-->
        <form method="POST" action="/modifier/traitement">
            @csrf


                   <div class="form-group">
                     <label class="form-label">Nom</label>
                     <input type="text" name="nom" class="form-control" value="{{$user->nom}}">
                   </div>

                   <div class="form-group">
                     <label class="form-label">Prénom</label>
                     <input type="text" name="Prénom" class="form-control" value="{{$user->prenom}}">
                   </div>
                   <div class="form-group">
                     <label class="form-label">Email</label>
                     <input type="email" name="email" class="form-control" value="{{$user->email}}">
                   </div>

                  <div class="form-group">
                     <label class="form-label">Téléphone</label>
                     <input type="number" name="telephone" class="form-control" value="{{$user->telephone}}">
                   </div>

                   <div class="form-group">
                     <label class="form-label">Role</label>
                     <input type="text" name="role" class="form-control" value="{{$user->role}}">
                   </div>
<div>
  <button class="btn btn-warning" type="submit" onclick="return confirm(' vous avez fini la modification? ')"> Modifier</button>
</div>

            </form>

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

  <script src="dash-assets/vendor/jquery/jquery.min.js"></script>
  <script src="dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="dash-assets/js/ruang-admin.min.js"></script>
  <script src="dash-assets/vendor/chart.js/Chart.min.js"></script>
  <script src="dash-assets/js/demo/chart-area-demo.js"></script>
</body>

</html>
