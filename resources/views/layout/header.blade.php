<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - iLanding Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename"><strong class="fw-bold">Saturnine MICHOZOUNNOU</strong></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Accueil</a></li>
                    <!--           <li><a href="#features">Features</a></li>
                        -->

                    <li class="dropdown"><a href="#"><span>Qui suis-je ?</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#about">A propos</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li><a href="#expertises">Expertises</a></li>

                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted text-uppercase fw-bold" type="button" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Prendre un rdv
            </a>
           
    </header>

    <main class="main">
        <main>
            @yield('content')
        </main>



    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-md-4 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename"> Saturnine Médessè Michozounnou</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Economiste, experte en gestion et évaluation de projets</p>
                        <p>Cotonou, Benin</p>

                    </div>
                </div>

                <div class="col-md-4 footer-links">
                    <h4 class="text-center " style="font-size: 26px; font-weight: 700;">Retrouvez-moi en ligne</h4>
                    <div class="social-links d-flex justify-content-center mt-4">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>




                <div class="col-md-4 footer-links text-end">
                    <h4 style="font-size: 26px; font-weight: 700;">Mes coordonnées</h4>
                    <div class="social-links">
                        <p class="mt-3"><strong>Phone:</strong> <span>+229 0197138302</span></p>
                        <p><strong>Email:</strong> <span>mksaturnine@gmail.com</span></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© 2025 <strong class="px-1 sitename">Acces universel</strong> Tous droits réservés</p>

        </div>

    </footer>
    <style>
        .footer .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #007bff;
            font-size: 16px;
            color: #007bff;
            background-color: transparent;
            margin: 0 5px;
            transition: all 0.3s ease;
        }

        .footer .social-links a:hover {
            background-color: #007bff;
            /* Couleur de fond au survol */
            color: #fff;
            /* Couleur de l'icône au survol */
            border-color: #007bff;
        }
    </style>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- <script>
document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const el = document.querySelector(window.location.hash);
        if (el) {
            setTimeout(() => {
                const offset = 80; // ajuste la valeur selon la hauteur de ta navbar
                const top = el.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }, 400);
        }
    }
});
</script>  -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>