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
                <h1><a href="#">CCI-CBRSI</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="/">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('register') }}">Inscription</a></li>
                    <li><a class="nav-link scrollto" href="/com">Comment Postuler</a></li>
                    <li><a class="nav-link scrollto" href="#specials">A propos</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ route('login') }}" class="book-a-table-btn scrollto">Connexion</a>

            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Contact</span></h2>
                    <p></p>
                </div>
            </div>

            <div class="map">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Adresse:</h4>
                            <p>Etoile rouge, <br>Cotonou, Benin</p>
                        </div>



                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p> <a href="mailto:mesrs.cbrsi@gouv.bj"
                                    style="color: black;">mesrs.cbrsi@gouv.bj</a><br>cci.cbrsi@gouv.bj</p>

                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Téléphone:</h4>
                            <p>(+229) 21 32 36 71<br>(+229) 21 32 09 77</p>
                        </div>
                    </div>
                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>
        </section><!-- End Contact Section -->

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Newsletter</h4>
                        <p style="color: white;">Abonnez-vous pour ne rien rater</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="S'abonner">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

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
