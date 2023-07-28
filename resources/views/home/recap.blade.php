<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord</title>
    <link href="/dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/dash-assets/css/ruang-admin.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800" style="color:black;">Finaliser votre Inscription en cliquant
                            sur Terminé</h1>
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Form Basic -->
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h1 class=" text-primary" style="margin-left:370px;">Informations</h1>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table" style="color:black;">
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénoms</th>
                                                <th>Télephone</th>
                                                <th>Email</th>
                                            </tr>
                                            <tr style="color:black;">
                                                <td> {{ Auth::user()->nom }}</td>
                                                <td>{{ Auth::user()->prenom }}</td>
                                                <td>{{ Auth::user()->telephone }}</td>
                                                <td>{{ Auth::user()->email }}</td>
                                            </tr>
                                        </table>
                                        <br>
                                        <br>

                                        <center>
                                            <h1 style="margin-left:400px; margin-top:20px; margin-bottom:20px;"
                                                class="text-primary">Thèses</h1>
                                        </center>


                                        <table class="table">
                                            <tr style="color:black;">
                                                <th>Titre</th>
                                                <th>Institution</th>
                                                <th>Mention</th>
                                                <th>Date de soutenance</th>
                                                <th>Thèse</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($These as $these)
                                                <tr style="color:black;">
                                                    <td>{{ $these->titre }}</td>
                                                    <td>{{ $these->institution }}</td>
                                                    <td>{{ $these->mention }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($these->date_nais)) }}</td>
                                                    <td><a href="{{ '/storage/these/' . $these->fichier }}"
                                                            class="btn btn-success" target="_blank">Voir</a></td>
                                                    <td><a href="/modifier_these/{{ $these->id }}"
                                                            class="btn btn-warning">Modifier</a></td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        <center>
                                            <h1 style="margin-left:400px; margin-top:20px; margin-bottom:20px;"
                                                class="text-primary">Diplômes</h1>
                                        </center>

                                        <table class="table" style="color:black;">
                                            <tr style="color:black;">
                                                <th>Nom</th>
                                                <th>Pays</th>
                                                <th>Années</th>
                                                <th>Institut d'obtention</th>
                                                <th>Diplôme</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($Diplome as $diplome)
                                                <tr style="color:black;">
                                                    <td>{{ $diplome->nom }}</td>
                                                    <td>{{ $diplome->pays }}</td>
                                                    <td>{{ $diplome->annee }}</td>
                                                    <td>{{ $diplome->institut }}</td>
                                                    <td><a href="{{ '/storage/diplome/' . $diplome->fichier }}"
                                                            class="btn btn-success" target="_blank">Voir</a></td>
                                                    <td><a href="/modifier_diplome/{{ $diplome->id }}"
                                                            class="btn btn-warning">Modifier</a></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <center>
                                            <h1 style="margin-left:400px; margin-top:20px; margin-bottom:20px;"
                                                class="text-primary">Traveaux</h1>
                                        </center>
                                        <table class="table">
                                            <tr style="color: black;">
                                                <th> Type</th>
                                                <th>Titre</th>
                                                <th>Date</th>
                                                <th>Document</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($Traveau as $traveau)
                                                <tr>

                                                    <td>{{ $traveau->type }}</td>
                                                    <td>{{ $traveau->titre }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($traveau->date_nais)) }}</td>
                                                    <td><a href="{{ '/storage/traveaux/' . $traveau->fichier }}"
                                                            target="_blank" class="btn btn-success">Voir</a></td>
                                                    <td><a href="/modifier_traveaux/{{ $traveau->id }}"
                                                            class="btn btn-warning">Modifier</a></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <center>
                                            <h1 style="margin-left:400px; margin-top:20px; margin-bottom:20px;"
                                                class="text-primary">Document</h1>
                                        </center>
                                        <table class="table" style="color:black;">
                                            <tr class="" style="color:black;">
                                                <th>Nom</th>
                                                <th>Documents</th>
                                                <th>Action </th>
                                            </tr>
                                            @foreach ($Piece as $piece)
                                                <tr style="color:black;">
                                                    <td>{{ $piece->nom }}</td>
                                                    <td>
                                                        <a href="{{ '/storage/pieces/' . $piece->fichier }}"
                                                            target="_blank" class="btn btn-success">Voir</a>
                                                    </td>
                                                    <td><a href="/modifier_piece/{{ $piece->id }}"
                                                            class="btn btn-warning">Modifier</a></td>
                                                </tr>
                                            @endforeach


                                        </table>
                                        <br>
                                        <br>

                                    </div>
                                </div>

                                <form method="POST" action="/notification">
                                    @csrf
                                    <button class="btn btn-success" type="submit"
                                        onclick="return confirm('vous avez vraiment fini? ')">Terminer</button>
                                </form>
                            </div>
                            <!---Container Fluid-->
                            @include('layouts.footer')
                        </div>
                    </div>

                    <!-- Scroll to top -->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <script src="/dash-assets/vendor/jquery/jquery.min.js"></script>
                    <script src="/dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="/dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="/dash-assets/js/ruang-admin.min.js"></script>
                    <script src="/dash-assets/vendor/chart.js/Chart.min.js"></script>
                    <script src="/dash-assets/js/demo/chart-area-demo.js"></script>

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
