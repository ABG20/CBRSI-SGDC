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
                        <h1 class="h3 mb-0 text-gray-800">Ajouter un membre</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ajouter un membre</li>
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
                                    <form method="POST" action="/create-user">
                                        @csrf

                                        <div>
                                            <x-label for="nom" value="{{ __('Nom') }}" />
                                            <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                                        </div>
                                        <div class="mt-4">
                                            <x-label for="prenom" value="{{ __('Prenom (s)') }}" />
                                            <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                                        </div>

                                        <div class="mt-4">
                                            <x-label for="email" value="{{ __('Email') }}" />
                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        </div>

                                        <div class="mt-4">
                                            <x-label for="telephone" value="{{ __('Telephone') }}" />
                                            <x-input id="telephone" class="block mt-1 w-full" type="number" name="telephone" :value="old('telephone')" required autocomplete="telephone" />
                                        </div>

                                        <div class="mt-4">
                                            <x-label for="telephone" value="Type d'utilisateur" />
                                            <select name="role" class="form-control block mt-1 w-full" :value="old('role')" required>
                                                <option>Sélectionnez l'année </option>
                                                <option value="CIL">CIL</option>
                                                <option value="Directeur">Directeur</option>
                                            </select>
                                        </div>
                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="mt-4">
                                                <x-label for="terms">
                                                    <div class="flex items-center">
                                                        <x-checkbox name="terms" id="terms" required />

                                                        <div class="ml-2">
                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                </x-label>
                                            </div>
                                        @endif

                                        <div class="flex items-center justify-end mt-4">
                                            <x-button class="ml-4" style="background-color: #3CAD46 !important;">
                                                {{ __('créer compte') }}
                                            </x-button>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <!---Container Fluid-->
                        <!-- Footer -->
                        @include('layouts.footer')
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
