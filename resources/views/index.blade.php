@include('header')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
    <nav id="menu" class="nav-wrapper fixed-top grs">
        <div class="container">
            <a href="#" class="brand-logo">Okinawa</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
            <ul class="navlist right hide-on-med-and-down">
                <li class="navitem"><a class="navlink" href="/">Inicio</a></li>
                <li class="navitem"><a class="navlink" href="/galeria">Galeria</a></li>
                <li class="navitem"><a class="navlink" href="/quienes-somos">Quienes Somos</a></li>
                <li class="navitem"><a class="navlink" href="/servicios">Servicios</a></li>
                <li class="navitem"><a class="navlink" href="/contacto">Contacto</a></li>
                <div class="active"></div>
            </ul>
            <ul class="sidenav " id="mobile-menu">
                <li><a href="/">Inicio</a></li>
                <li><a href="/galeria">Galeria</a></li>
                <li><a href="/quienes-somos">Quienes Somos</a></li>
                <li><a href="/servicios">Servicios</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul> 
        </div>
    </nav> 


    <div class="section portada"></div>
    <!--Precios-->
    <h1 class="center mb-5">Ven Unete A Okinawa</h1>
    <div class="container-fluid">

        <!--<h1 class="center">Ven y unete a Okinawa </h1>-->
        <div class="container py-5">

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-block">
                            <div class="py-3">
                                <span class="h1">$</span><span class="display-1 align-middle">15.000</span>
                            </div>
                            <p class="h1">Mensual</p>
                            <h4 class="card-title py-2">PRIMERA CLASE GRATIS</h4>
                            <p class="card-text">aqui debera ir un texto o lo sacamos</p>
                        </div>
                        <a href="" class="card-footer btn bg-primary text-white">Contratar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-block">
                            <div class="py-3">
                                <span class="h1">$</span><span class="display-1 align-middle">40.000</span>
                            </div>
                            <p class="h1">Plan 3 meses</p>
                            <h4 class="card-title py-2">3 meses</h4>
                            <p class="card-text">aqui debera ir un texto o lo sacamos</p>
                        </div>
                        <a href="" class="card-footer btn bg-primary text-white">Contratar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-block">
                            <div class="py-3">
                                <span class="h1">$</span><span class="display-1 align-middle">145.000</span>
                            </div>
                            <p class="h1">Anual</p>
                            <h4 class="card-title py-2">PRIMERA CLASE GRATIS</h4>
                            <p class="card-text">aqui debera ir un texto o lo sacamos</p>
                        </div>
                        <a href="" class="card-footer btn bg-primary text-white">Contratar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Precios-->

    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="col s12 m3 l3">
                    <div class="section">
                        <h4 class="center">Kick Boxing</h4>
                        <img class="materialboxed responsive-img" src="{{ asset('imagenes/slider/slide1.jpg') }}" data-caption="Clases Kick boxing toda la semana">
                    </div>
                </div> 
                <div class="col s12 m3 l3">
                    <div class="section">
                        <h4 class="center">GAP</h4>
                        <img class="materialboxed responsive-img" src="{{ asset('imagenes/slider/slide2.jpg') }}" data-caption="Clases GAP Martes y Jueves">
                    </div>
                </div> 
                <div class="col s12 m3 l3">
                    <div class="section">
                        <h4 class="center">Karate Infantil</h4>
                        <img class="materialboxed responsive-img" src="{{ asset('imagenes/slider/slide3.jpg') }}" data-caption="Karate infantil por las tardes">
                    </div>
                </div> 
                <div class="col s12 m3 l3">
                    <div class="section">
                        <h4 class="center">Funcional</h4>
                        <img class="materialboxed responsive-img" src="{{ asset('imagenes/slider/slide3.jpg') }}" data-caption="Karate infantil por las tardes">
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <footer class="page-footer grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Gimnasio Okinawa</h5>
                    <p class="grey-text text-lighten-4">Visitanos en puente alto el belloto </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li><i class="fab fa-instagram"></i><a class="grey-text text-lighten-3" href="https://www.instagram.com/okinawa_gym/" target="_blank">  Instagram</a></li>
                        <li><i class="fab fa-facebook-square"></i><a class="grey-text text-lighten-3" href="https://www.facebook.com/gimnasio.okinawa.395" target="_blank">  Facebook</a></li>
                        <li><i class="fab fa-youtube"></i><a class="grey-text text-lighten-3" href="#!" target="_blank">  Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <a class="grey-text text-lighten-4 right" href="https://www.instagram.com/jeetzkiller/" target="_blank">Hola</a>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems,{
                indicators:false,
                height:900,
                interval:3000
            });

            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems);

            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems,{
                inDuration:400
            });
        });

        //navbar scroll
        $(window).scroll(function(){
            if($("#menu").offset().top > 1){
                $("#menu").addClass("grey darken-4");
            }else{
                $("#menu").removeClass("grey darken-4");
            }
        });


    </script>
</body>


@include('footer')