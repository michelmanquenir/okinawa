@include('header')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
    <nav id="menu" class="nav-wrapper fixed-top grs">
        <div class="container">
            <a href="/" class="brand-logo">Okinawa</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
            <ul class="navlist right hide-on-med-and-down">
                <li class="navitem"><a class="navlink" href="/galeria">Galeria</a></li>
                <li class="navitem"><a class="navlink" href="/quienes-somos">Quienes Somos</a></li>
                <li class="navitem"><a class="navlink" href="/servicios">Servicios</a></li>
                <li class="navitem"><a class="navlink" href="/contacto">Contacto</a></li>
                <div class="active"></div>
            </ul>
            <ul class="sidenav " id="mobile-menu">
                <li><a href="/galeria">Galeria</a></li>
                <li><a href="/quienes-somos">Quienes Somos</a></li>
                <li><a href="/servicios">Servicios</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul> 
        </div>
    </nav> 
    <div class="section black">
        <div class="content"> 
            <div class="content-wrap">
                <div class="section">
                    <div class="container clearfix">
                        <h3 class="center" style="margin-top: 70px;"><u>Contacto</u></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, repudiandae suscipit quis iste cum dolorem ex aliquid, sapiente obcaecati deleniti praesentium maiores aspernatur ullam eius minus rem vitae voluptas consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="" style="height:1000px;"></div>
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