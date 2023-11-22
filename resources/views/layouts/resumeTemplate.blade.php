<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/resume.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="/assets/profiles.png" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="/">Yusuf Amin Abdillah</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://wa.me/6285311000921" target="_blank" class="whatsapp"><i
                            class="bx bxl-whatsapp"></i></a>
                    <a href="https://github.com/amincup" target="_blank" class="github"><i
                            class="bx bxl-github"></i></a>
                    <a href="https://www.instagram.com/yusuffaa_/" target="_blank" class="instagram"><i
                            class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/yusuf-amin-abdillah-66b662174/" target="_blank"
                        class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="mailto:yusufaa464@gmail.com" target="_blank" class="gmail"><i
                            class="bx bxl-gmail"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li>
                        <a href="/" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="/resume#about" class="nav-link scrollto active"><i
                                class="bx bx-user"></i><span>About</span></a>
                    </li>
                    <li>
                        <a href="/resume#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a>
                    </li>
                    <li>
                        <a href="/resume#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portfolio</span></a>
                    </li>
                    {{-- <li><a href="/resume#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Services</span></a></li> --}}
                    <li><a href="/resume#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    {{-- ayaka sayang isi disini ya kontennya --}}
    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footerR">
        <div class="container">
            <div class="copyright">
                &copy; <strong><span>Yusuf Amin Abdillah</span></strong>
            </div>
            <div class="credits">
                Template by <br>BootstrapMade - <a
                    href="https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/">iPortfolio</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/typed.js/typed.umd.js"></script>
    <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="resume.js"></script>

</body>

</html>
