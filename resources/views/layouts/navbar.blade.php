<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="index.html"><img src="../images/logo.png"></a></div>
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
                    <a class="nav-link" href="{{ url('/principal/contact') }}">Contactos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administración
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('products.index') }}">{{ __('Productos') }}</a>
                    </div>
                </li>
                <!--boton cuenta-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuenta
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
                    <a class="nav-link" href="#"><img src="../images/search-icon.png"></a>
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
                                <p class="banner_text">There are many variations of passages of Lorem Ipsum</p>
                                <div class="btn_main">
                                    <div class="more_bt"><a href="#">Contact Now</a></div>
                                    <div class="contact_bt"><a href="#">Get A Quote</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1"><img src="../images/img-1.png"></div>
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
                                <p class="banner_text">There are many variations of passages of Lorem Ipsum</p>
                                <div class="btn_main">
                                    <div class="more_bt"><a href="#">Contact Now</a></div>
                                    <div class="contact_bt"><a href="#">Get A Quote</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1"><img src="../images/img-1.png"></div>
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
                                <p class="banner_text">There are many variations of passages of Lorem Ipsum</p>
                                <div class="btn_main">
                                    <div class="more_bt"><a href="#">Contact Now</a></div>
                                    <div class="contact_bt"><a href="#">Get A Quote</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1"><img src="../images/img-1.png"></div>
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