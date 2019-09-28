@include('header')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
    @include('navbar')
    <div class="section black text-white">
       <h1 class="center" style="margin-top: 70px;"><u>Galeria Fotografica</u></h1>
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