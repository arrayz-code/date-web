<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head> @yield('head')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>



        Date Vida


    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="{{asset('assets/front/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/front/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->

    <link id="pagestyle" href={{ asset('assets/front/assets/css/material-kit.css?v=3.0.4') }} rel="stylesheet" />



    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    @show
</head>


<body class="index-page bg-gray-200">


    <!-- Navbar -->
    @yield('header')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                            Date Vida
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                        ¿Quiénes somos?
                                        <img src="{{asset('assets/front/assets/img/down-arrow-dark.svg')}}"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="d-none d-lg-block">
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Conócenos
                                            </h6>
                                            <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                                <span>Acerca de nosotros</span>
                                            </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                <span>Contáctanos</span>
                                            </a>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Cuenta
                                            </h6>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                                                <span>Sign In</span>
                                            </a>
                                        </div>

                                        <div class="d-lg-none">
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Landing Pages
                                            </h6>

                                            <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                                <span>About Us</span>
                                            </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                <span>Contact Us</span>
                                            </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                <span>Author</span>
                                            </a>

                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Account
                                            </h6>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                                                <span>Sign In</span>
                                            </a>

                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">article</i>
                                        Menu
                                        <img src="{{asset('assets/front/assets/img/down-arrow.svg')}}" alt="down-arrow"
                                            class="arrow ms-auto ms-md-2">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Menú</h6>
                                                        <span class="text-sm">Consulta aquí las especialidades de la casa</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Promo</h6>
                                                        <span class="text-sm">¡No te pierdas las promo!</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="row d-lg-none">
                                            <div class="col-md-12 g-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Getting Started</h6>
                                                    <span class="text-sm">All about overview, quick start, license and
                                                        contents</span>
                                                </a>

                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Foundation</h6>
                                                    <span class="text-sm">See our colors, icons and typography</span>
                                                </a>

                                            </div>
                                        </div>

                                    </ul>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="/login" target="_blank">
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Reserva ya">Reserva</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="/login" target="_blank">
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Ingresa ya">Login</p>
                                    </a>
                                </li>
                                <li class="nav-item my-auto ms-3 ms-lg-0">

                                    <a href="https://api.whatsapp.com/send/?phone=19295316563&text=Hola%2C+%C2%A1Quiero+ordenar%21&type=phone_number&app_absent=0"
                                        class="btn btn-sm  bg-gradient-warning  mb-0 me-1 mt-2 mt-md-0">Ordena aquí</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    @show



    @yield('content')

    @show

    @section('footer')
    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <footer class="footer pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 ms-auto">
                    <img src="{{ asset('logo-date.png') }}" width="100px" alt="main_logo">
                    <h5 class="font-weight-bolder mb-4">Date Vida</h5>
                    <div>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w"
                                    target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Menú</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/menu') }}">
                                    Ver Menú
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/menu/specials') }}">
                                    Especiales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/menu/promotions') }}">
                                    Promociones
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Pedidos</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/orders') }}">
                                    Realizar Pedido
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/orders/history') }}">
                                    Historial de Pedidos
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Reservaciones</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/reservations') }}">
                                    Reservar Mesa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/reservations/history') }}">
                                    Historial de Reservas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                    <div>
                        <h6 class="text-sm">Ayuda & Soporte</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">
                                    Contacto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/faq') }}">
                                    Preguntas Frecuentes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/support') }}">
                                    Soporte Técnico
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                            Todos los derechos reservados. Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> Date Vida <a href="https://www.datevida.com.ve" target="_blank"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @show

    @yield('scripts')
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/front/assets/js/core/popper.min.js')}} " type="text/javascript"></script>
    <script src="{{ asset('assets/front/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>




    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{asset ('assets/front/assets/js/plugins/countup.min.js')}}"></script>





    <script src="{{asset ('assets/front/assets/js/plugins/choices.min.js')}}"></script>



    <script src="{{ asset('assets/front/assets/js/plugins/prism.min.js')}}"></script>
    <script src="{{ asset('assets/front/assets/js/plugins/highlight.min.js')}}"></script>



    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{ {asset ('assets/front/assets/js/plugins/rellax.min.js')}}"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{ asset('assets/front/assets/js/plugins/tilt.min.js')}}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{ asset('assets/front/assets/js/plugins/choices.min.js')}}"></script>

    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{asset('assets/front/assets/js/material-kit.min.js?v=3.0.4')}}" type="text/javascript"></script>


    <script type="text/javascript">
        if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
    </script>

</body>

</html>