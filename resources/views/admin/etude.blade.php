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
        @include('layouts.director.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.director.topbar')
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"
                            style="text-align:center; margin-left:350px; font-weight: bold;">Valider ou Refuser dossier
                        </h1>

                    </div>
                    @if (session('status_valider'))
                        <div class="mb-4 alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('status_refuser'))
                        <div class="mb-4 alert alert-danger">
                            {{ session('statu') }}
                        </div>
                    @endif

                    <table class="table">

                        <tr class="bg-success" style="color: white;">
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Matricule</th>
                            <th>Grade voulu</th>
                            <th>Section</th>
                            <th>Spécialité</th>
                            <th>Actions</th>
                        </tr>
                        @php

                            $num = 1;
                        @endphp

                        @foreach ($candidats as $candidat)
                            <tr>
                                <td> {{ $num }}</td>

                                <td>{{ $candidat->nom }}</td>
                                <td>{{ $candidat->prenom }}</td>
                                <td>{{ $candidat->matricule }}</td>
                                <td>{{ $candidat->grade_post }}</td>
                                <td>{{ $candidat->section }}</td>
                                <td>{{ $candidat->specialite }}</td>
                                <td>
                                    @if ($candidat->status === NULL)
                                        <div>
                                            <form method="POST" action="/valider/{{ $candidat->dossier_id }}"
                                                style="display:inline-block;">
                                                @csrf
                                                <button class="btn btn-success" type="submit" style="background: #3CAD46;"
                                                    onclick="return confirm(' Voulez vous Valider le dossier de ce candidat? ')">Valider</button>
                                            </form>
                                            <form method="POST" action="/refuser/{{ $candidat->dossier_id }}"
                                                style="display:inline-block">
                                                @csrf
                                                <button class="btn btn-danger" type="submit" style="background: #FF0000;"
                                                    onclick="return confirm(' Voulez vous Refuser le dossier de ce candidat? ')">Refuser</button>
                                            </form>
                                        </div>
                                    @else
                                        @if ($candidat->status)
                                            <div class="text-success">Validé</div>
                                        @else
                                            <div class="text-danger">Refusé</div>
                                        @endif
                                    @endif


                                </td>
                                <!-- <td>{{ date('d-m-Y', strtotime($candidat->date_nais)) }}</td>  -->
                            </tr>
                            @php
                                $num += 1;
                            @endphp
                        @endforeach
                    </table>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white col-12">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> |CBRSI
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
        <script>
            function openModal() {
                $('#myModal').modal('show');
            }
        </script>
</body>

</html>
