
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Medicine</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="../images/fevicon.png" type="../image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets -->
   <link rel="stylesheet" href="../css/owl.carousel.min.css">
   <link rel="stylesheet" href="../css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/jquery-3.0.0.min.js"></script>
   <script src="../js/plugin.js"></script>
   <!-- sidebar -->
   <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../js/custom.js"></script>
   <!-- javascript -->
   <script src="../js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo" style = "display: block; text-align: center; margin-left: -160px;"><a href="{{ url('home') }}"  ><img src="../images/iconoPrincipal.png" style="width: 150px "><h1 style =" color: #3ba9d7;">Clínica Carrillo</h1></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('home') }}">{{ __('Inicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/health') }}">{{ __('Salud') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/medicine') }}">{{ __('Medicina') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/news') }}">{{ __('Nuevo') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal/contact') }}">{{ __('Servicios') }}</a>
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
                  </div>
               </li>
               @endrole
                <!--boton cuenta-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                    <a class="nav-link" href="#"><img src="../images/search-icon.png"></a>
                </li>
            </ul>
        </div>
    </nav>
      </div>
      <!-- header section end -->
      <!-- knowledge section end -->
      <div class="knowledge_section layout_padding">
      <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital">{{ __('Sobre nosotros') }}</h1>
               <p class="knowledge_text">{{ __('Somos la clínica dental de referencia, con un equipo humano dirigido por los mejores profesionales del sector. Con amplias y modernas instalaciones, dotadas de las últimas tecnologías que nos permitan ofrecer el mejor cuidado para una salud bucodental de calidad. Nuestra apuesta por la innovación nos ha hecho incorporar tratamientos muy novedosos como el uso de Plasma Rico en Plaquetas, un tratamiento fundamental para la cicatrización y regeneración de tejidos.') }}</p>
            </div>
            <div class="right_main">
               <div class="play_icon"><a href="#"><img src="../images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
   </div>
      <!-- knowledge section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">{{ __('Contáctanos') }}</h1>
               <div class="map_icon"><img src="../images/map-icon.png"><span class="paddlin_left_0">{{ __('Ubicación') }}</span></div>
               <div class="map_icon"><img src="../images/call-icon.png"><span class="paddlin_left_0">{{ __('656881748') }}</span></div>
               <div class="map_icon"><img src="../images/mail-icon.png"><span class="paddlin_left_10">{{ __('ClinicaCarrillo@gmail.com') }}</span></div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">{{ __('Certificados') }}</h1>
               <div class="hiphop_text_1">{{ __('Pensando en todas las personas y familias que buscan una clínica de confianza, en Clinica Carrillo disponemos de un amplio equipo de profesionales sanitarios a su disposición que le atenderán de forma personalizada y sin desplazamientos.') }}</div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">{{ __('Horarios') }}</h1>
               <div class="Useful_text">{{ __('Abrimos de lunes a viernes con un horario adaptado a nuestros pacientes.') }}</div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">{{ __('Noticiero') }}</h1>
               <div class="subscribe_bt"><a href="#">{{ __('Subscribirse') }}</a></div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="../images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="../images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="../images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="../images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">{{ __('© 2024. Todos los derechos reservados por Aviso Legal | Política de privacidad') }}</a></p>
      </div>
   </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      
