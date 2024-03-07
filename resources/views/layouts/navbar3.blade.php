<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>


<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo" style = "display: block; text-align: center; margin-left: -160px;"><a href="{{ url('home') }}"  ><img src="../images/iconoPrincipal.png" style="width: 150px "><h1 style =" color: #3ba9d7;">Clínica Carrillo</h1></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/health') }}">Salud</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/medicine') }}">Medicina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/news') }}">Nuevo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/contact') }}">Servicios</a>
                </li>
                <!-- menu admin -->
                @role('administrador')
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="{{ route('products.index') }}">{{ __('Productos') }}</a>
                     <a class="dropdown-item" href="{{ route('merchandisings.index') }}">{{ __('Merchandising') }}</a>
                     <a class="dropdown-item" href="{{ route('instrumentos.index') }}">{{ __('Instrumentos Dentales') }}</a>
                    </div>
               </li>
               @endrole
                <!--boton cuenta-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('principal/client') }}">Mi perfil</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ __("Idiomas") }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{route('set_language', ['es'])}}">{{ __("Ingles") }}</a>
                     <a class="dropdown-item" href="{{route('set_language', ['en'])}}">{{ __("Español") }}</a>
                  </div>
               </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                </li>
            </ul>
        </div>
    </nav>
</div>


   <main class="py-4">
            @yield('content')
        </main>