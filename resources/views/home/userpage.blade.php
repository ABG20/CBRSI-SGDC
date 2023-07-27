<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CCI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="">
    <link href="">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="home-assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="home-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="home-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="home-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="home-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="home-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="home-assets/css/style.css" rel="stylesheet">

</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <a href="#"><img src="dash-assets/img/logo/logo_cbrsi.jpg"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('register') }}">Inscription</a></li>
                    <li><a class="nav-link scrollto" href="/com">Comment Postuler</a></li>
                    <li><a class="nav-link scrollto" href="#specials">A propos</a></li>
                    <li><a class="nav-link scrollto" href="/cont">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ route('login') }}" class="book-a-table-btn scrollto">Connexion</a>

            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade"
                    data-bs-ride="carousel">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active"
                            style="background-image: url(home-assets/img/slide/ban_guide1.png);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown"><span></span> GUIDE D'EVALUATION
                                        DES ENSEIGNANTS <br>CHERCHEURS & CHERCHEURS</h2>
                                    <p class="animate__animated animate__fadeInUp"></p>
                                    <div>
                                        <a href="#book-a-table"
                                            class="btn-book animate__animated animate__fadeInUp scrollto">En-savoir-plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background-image: url(home-assets/img/slide/ban_form.png);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">COMMENT POSTULERS</h2>
                                    <p class="animate__animated animate__fadeInUp"></p>
                                    <div>

                                        <a href="#book-a-table"
                                            class="btn-book animate__animated animate__fadeInUp scrollto">En-savoir-plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background-image: url(home-assets/img/slide/ban_form.png);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Quide d'utlisation</h2>
                                    <p class="animate__animated animate__fadeInUp"></p>
                                    <div>
                                        <a href="#book-a-table"
                                            class="btn-book animate__animated animate__fadeInUp scrollto">En-savoir-plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                </div>
            </div>
        </section>
        <!-- End Hero -->


        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Newsletter</h4>
                        <p style="color: white;">Abonnez-vous pour ne rien rater </p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="S'abonner">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="container">
                <div class="copyright">
                    &copy; Copyright {{ date('Y') }} &middot; <strong><span>CBRSI</span></strong>|Tous droits
                    reservés.
                </div>
                <div class="credits">
                </div>
            </div>
        </footer><!-- End Footer -->

        <!-- Vendor JS Files -->
        <script src="home-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="home-assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="home-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="home-assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="home-assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="home-assets/js/main.js"></script>

</body>

</html>
