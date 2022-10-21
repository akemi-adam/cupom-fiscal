<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('title')
    </title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{asset('Impact/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('Impact/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('Impact/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Impact/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Impact/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Impact/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('Impact/assets/css/main.css')}}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>

    @livewireStyles

</head>
<body>
    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
            <h1>Hugo<span>Market</span></h1>
            </a>
            <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('enterprise.create') }}">Cadastrar Empresa</a></li>
                <li><a href="{{ route('enterprise.index') }}">Ver Empresas</a></li>
                <li><a href="{{ route('institution.create') }}">Cadastrar Instituições</a></li>
                <li><a href="#">Cadastrar Nota Fiscal</a></li>
                <li><a href="#">Fazer Doação</a></li>
            </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
        </header><!-- End Header -->
        <!-- End Header -->

        <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>@yield('title')</h2>
                </div>
                </div>
            </div>
            </div>
            <nav>
            <div class="container">
                <ol>
                <li><a href="/">Dashboard</a></li>
                <li>@yield('title')</li>
                </ol>
            </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <section class="sample-page">
            <div class="container" data-aos="fade-up">
                @if (session('message'))
            <div class="alert alert-success mt-4">
                {{ session('message') }}
            </div>
        @endif
            @yield('content')
            </div>
        </section>
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                <span>Hugo Market</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                A108 Adam Street <br>
                New York, NY 535022<br>
                United States <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
                </p>

            </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
            &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
            </div>
        </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

    @livewireScripts

    <script src="{{asset('Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Impact/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('Impact/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('Impact/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('Impact/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('Impact/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Impact/assets/js/main.js')}}"></script>
</body>
</html>