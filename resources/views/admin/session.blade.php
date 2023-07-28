<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Programmer une session</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Session</li>
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
                    </ul>


                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form Basic -->
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">



                                    </div>
                                    <div class="card-body">
                                        <form action="/traitement/prof" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="">Date de début de la session *</label>
                                                <input type="date" class="form-control" name="matricule" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Date de fin de la session *</label>
                                                <input type="date" class="form-control" name="matricule" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pièces à fourni *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matricule" required>
                                            </div>

                                    </div>
                                    <button type="submit" style="background: #3CAD46;"
                                        class="btn btn-success">Valider</button>
                                    </form>
                                </div>
                            </div>
                            <!---Container Fluid-->
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
</body>

</html>
