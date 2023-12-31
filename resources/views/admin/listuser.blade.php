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
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800" style="text-align:center; margin-left:350px; font-weight: bold;">Liste des Utilisateur</h1>
</div>

@if(session('status'))
          <div class="alert alert-success">
            {{ session('status')}}
          </div>
          @endif


<table class="table">

<tr>
  <th>N°</th>
  <th>Nom</th>
  <th>Prénoms</th>
  <th>Télephone</th>
  <th>Email</th>
  <th>Role</th>
  <th> Actions</th>
</tr>

 @php

 $num=1;
 @endphp
@foreach($Users as $users)

<tr>
 <td> {{$num}}</td>
  <td>{{$users->nom}}</td>
  <td>{{$users->prenom}}</td>
  <td>{{$users->telephone}}</td>
  <td>{{$users->email}}</td>
  <td>{{$users->role}}</td>
  <td>
    <a href="/supprimeruser/{{$users->id}}" class="btn btn-danger" onclick="return confirm('  vous voulez vraiment supprimer ce utlisateur? ')">Supprimer</a>
    <a href="/modifieruser/{{$users->id}}" class="btn btn-warning" onclick="return confirm('  vous voulez ce utlisateur? ')"> Modifier</a>
  </td>
</tr>
@php
 $num+=1;
 @endphp
@endforeach
</table>
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

  <script src="dash-assets/vendor/jquery/jquery.min.js"></script>
  <script src="dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="dash-assets/js/ruang-admin.min.js"></script>
  <script src="dash-assets/vendor/chart.js/Chart.min.js"></script>
  <script src="dash-assets/js/demo/chart-area-demo.js"></script>
</body>

</html>
