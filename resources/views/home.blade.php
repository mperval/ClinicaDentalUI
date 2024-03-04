<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Home</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
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
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo" style = "display: block; text-align: center; margin-left: -160px;"><a href="{{ url('home') }}"  ><img src="images/iconoPrincipal.png" style="width: 150px "><h1 style =" color: #3ba9d7;">Clínica Carrillo</h1></a></div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="{{ url('home') }}">Inicio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ url('/principal/health') }}">Salud</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ url('/principal/medicine') }}">Medicina</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ url('/principal/news') }}">Nuevo</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ url('/principal/contact') }}">Servicios</a>
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
                     <a class="dropdown-item" href="{{ url('/principal/client') }}">Mi perfil</a>
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- header section end -->
      <!-- banner section start -->
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Health <br><span style="color: #151515;">Care</span></h1>
                           <p class="banner_text">¡Bienvenidos a la Clínica Dental Carrillo!</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{ url('/principal/contact') }}">Contáctanos</a></div>
                              <div class="contact_bt"><a href="#">Get A Quote</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Health <br><span style="color: #151515;">Care</span></h1>
                           <p class="banner_text">En Nuestra clínica podrá observar los distintos servicios que tenemos a su disposición</p>
                           <div class="btn_main">
                           <div class="more_bt"><a href="{{ url('/principal/contact') }}">Contáctanos</a></div>
                              <div class="contact_bt"><a href="#">Get A Quote</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Health <br><span style="color: #151515;">Care</span></h1>
                           <p class="banner_text">Tenemos varios tratamientos a elegir como por ejemplo: implantología,  ortodoncia, estética dental, prótesis, etc... </p>
                           <div class="btn_main">
                           <div class="more_bt"><a href="{{ url('/principal/contact') }}">Contáctanos</a></div>
                              <div class="contact_bt"><a href="#">Get A Quote</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a>
      </div>
   </div>
   <!-- banner section end -->
   <!-- health section start -->
   <div class="health_section layout_padding">
      <div class="container">
         <h1 class="health_taital">Los mejores cuidados para sus dientes</h1>
         <p class="health_text">Damos la bienvenida a nuestros pacientes a un ambiente relajado y respetuoso, donde podrán recibir una atención integral de calidad por parte de nuestro equipo altamente capacitado.</p>
         <div class="health_section layout_padding">
            <div class="row">
               <div class="col-sm-7">
                  <div class="image_main">
                     <div class="main">
                        <img src="images/img-2.png" alt="Avatar" class="image" style="width:100%">
                     </div>
                     <div class="middle">
                        <div class="text"><img src="images/icon-1.png" style="width: 40px;"></div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-5">
                  <div class="image_main_1">
                     <div class="main">
                        <img src="images/img-3.png" alt="Avatar" class="image" style="width:100%">
                     </div>
                     <div class="middle">
                        <div class="text"><img src="images/icon-1.png" style="width: 40px;"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="getquote_bt_1"><a href="#">Leer más<span><img src="images/right-arrow.png"></span></a></div>
         </div>
      </div>
   </div>
   <!-- health section end -->
   <!-- knowledge section end -->
   <div class="knowledge_section layout_padding">
      <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital">Sobre nosotros</h1>
               <p class="knowledge_text">Somos la clínica dental de referencia, con un equipo humano dirigido por los mejores profesionales del sector. Con amplias y modernas instalaciones, dotadas de las últimas tecnologías que nos permitan ofrecer el mejor cuidado para una salud bucodental de calidad. Nuestra apuesta por la innovación nos ha hecho incorporar tratamientos muy novedosos como el uso de Plasma Rico en Plaquetas, un tratamiento fundamental para la cicatrización y regeneración de tejidos.</p>
            </div>
            <div class="right_main">
               <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- knowledge section end -->
   <!-- news section start -->
   <div class="news_section layout_padding">
      <div class="container">
         <h1 class="health_taital">¿Por qué elegir Clínica Carrillo?</h1>
         <p class="health_text">Trabajar y sufrir dolor, gran cosa. Porque por el trabajo duro se obtiene algo grande. Para alcanzar una vida mínimamente satisfactoria.</p>
         <div class="news_section_2 layout_padding">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h4 class="daily_text">Certificados Médicos</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main active">
                     <div class="icon_1"><img src="images/icon-3.png"></div>
                     <h4 class="daily_text_1">Lunes a Viernes con Horario adaptable</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="images/ic_botiquin.png" style="width: 150px;"></div>
                     <h4 class="daily_text_1">Tratamientos</h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="getquote_bt"><a href="#">Get A Quote <span><img src="images/right-arrow.png"></span></a></div>
      </div>
   </div>
   <!-- news section end -->
   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">Nuestros tratamientos</h1>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/impla-1.png" style="width: 69px;"></div>
                     <h4 class="diabetes_text">Implantología </h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/impla-2.png" style="width: 69px;"></div>
                     <h4 class="diabetes_text">Ortodoncia</h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/impla-3.png" style="width: 69px;"></div>
                     <h4 class="diabetes_text">Estética dental</h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/impla-4.png" style="width: 69px;"></div>
                     <h4 class="diabetes_text">Prótesis</h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="contact_box">
                     <h1 class="book_text">Reservar una cita</h1>
                     <input type="text" class="Email_text" placeholder="Name" name="Name">
                     <input type="text" class="Email_text" placeholder="Name" name="Name">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">Enviar</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- client section start -->

   <!--<div class="client_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a>
      </div>
   </div> -->
   <!-- client section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">Contáctanos</h1>
               <div class="map_icon"><img src="images/map-icon.png"><span class="paddlin_left_0">Ubicación</span></div>
               <div class="map_icon"><img src="images/call-icon.png"><span class="paddlin_left_0">656881748</span></div>
               <div class="map_icon"><img src="images/mail-icon.png"><span class="paddlin_left_10">ClinicaCarrillo@gmail.com</span></div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">Certificados</h1>
               <div class="hiphop_text_1">Pensando en todas las personas y familias que buscan una clínica de confianza, en Clinica Carrillo disponemos de un amplio equipo de profesionales sanitarios a su disposición que le atenderán de forma personalizada y sin desplazamientos.</div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">Horarios</h1>
               <div class="Useful_text">Abrimos de lunes a viernes con un horario adaptado a nuestros pacientes.</div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h1 class="adderss_text">Noticiero</h1>
               <div class="subscribe_bt"><a href="#">Subscribirse</a></div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
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
         <p class="copyright_text">© 2024. Todos los derechos reservados por Aviso Legal | Política de privacidad</a></p>
      </div>
   </div>
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
</body>