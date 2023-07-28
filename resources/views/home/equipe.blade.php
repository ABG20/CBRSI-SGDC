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

<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.topbar')
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">l'équipe d'elaboration pour la thèse</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thèse</li>
                        </ol>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach ($errors->all() as $errors)
                            <li class="alert alert-danger"> {{ $errors }} </li>
                        @endforeach


                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form Basic -->
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">



                                    </div>
                                    <div class="card-body">
                                        <form action="/traitement/jury" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-label">Type *</label>
                                                <select class="form-control" name="type">
                                                    <option>Rapporteur de thèse</option>
                                                    <option> Directeur de thèse</option>
                                                    <option> Exaninateur de thèse</option>
                                                    <option> Co-rapporteur de thèse</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nom et Prénoms *</label>
                                                <input type="text" name="nom" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Grade *</label>
                                                <input type="text" name="grade" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Etablisement *</label>
                                                <input type="text" name="etablissement" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Spécialité *</label>
                                                <input type="text" name="specialite" class="form-control"
                                                    placeholder="">
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

                <script src="/dash-assets/vendor/jquery/jquery.min.js"></script>
                <script src="/dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="/dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
                <script src="/dash-assets/js/ruang-admin.min.js"></script>
                <script src="/dash-assets/vendor/chart.js/Chart.min.js"></script>
                <script src="/dash-assets/js/demo/chart-area-demo.js"></script>

</body>

</html>
