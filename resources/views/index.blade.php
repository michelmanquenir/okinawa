@include('header')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
    @include('navbar')
    <div class="section portada"></div>
    <!--Precios-->
    <h1 class="text-center h1-responsive mb-5">Ven Unete A Okinawa</h1>
    <div class="container-fluid">

        <!--<h1 class="center">Ven y unete a Okinawa </h1>-->
        <div class="container py-5">

            <div class="row">
                <div class="col-md-12 col-lg-4 col-xs-12">
                    <div class="card text-center">
                        <div class="card-block">
                            <div class="py-3">
                                <h1 class="h1-responsive"><span class="h1">$</span>15.000</h1>
                            </div>
                            <p class="h1">Mensual</p>
                            <h4 class="card-title py-2">PRIMERA CLASE GRATIS</h4>
                            <p class="card-text">aqui debera ir un texto o lo sacamos</p>
                        </div>
                        <a href="" class="card-footer btn bg-primary text-white">Contratar</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xs-12">
                    <div class="card text-center">
                        <div class="card-block">
                            <div class="py-3">
                                <h1 class="h1-responsive"><span class="h1">$</span>40.000</h1>
                            </div>
                            <p class="h1">Plan 3 meses</p>
                            <h4 class="card-title py-2">3 meses</h4>
                            <p class="card-text">aqui debera ir un texto o lo sacamos</p>
                        </div>
                        <a href="" class="card-footer btn bg-primary text-white">Contratar</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xs-12">
                    <div class="card text-center">
                        <div class="card-block">
                            <div class="py-3">
                                <h1 class="h1-responsive"><span class="h1">$</span>140.000</h1>
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

    <div class="section mb-5">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <h1 class="text-center h1-responsive">Que dicen nuestros clientes</h1>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" src="{{ asset('imagenes/fotos/cristian.png') }}" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title text-center"><a>Cristian E.</a></h4>
                            <!-- Text -->
                            <p class="card-text">Hola mundo.</p>
                            <!-- Button -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" src="{{ asset('imagenes/fotos/cristian.png') }}" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title text-center"><a>Michel M.</a></h4>
                            <!-- Text -->
                            <p class="card-text">Hola mundo.</p>
                            <!-- Button -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" src="{{ asset('imagenes/fotos/cristian.png') }}" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title text-center"><a>Kamila</a></h4>
                            <!-- Text -->
                            <p class="card-text">Hola mundo.</p>
                            <!-- Button -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" src="{{ asset('imagenes/fotos/cristian.png') }}" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title text-center"><a>Kamila</a></h4>
                            <!-- Text -->
                            <p class="card-text">Hola mundo.</p>
                            <!-- Button -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('footer')

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
