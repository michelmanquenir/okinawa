@include('header')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
    @include('navbar')
    <div class="section black text-white">
        <div class="content"> 
            <div class="content-wrap">
                <div class="section">
                    <div class="container clearfix">
                        <h3 class="center" style="margin-top: 70px;"><u>Contacto</u></h3>
                    </div>
                </div>
            </div>
        </div>

        <section class="fondo">
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <h1 class="h1-responsive d-none d-md-block">Conoce Gimnasio okinawa</h1>
                            <hr class="d-none d-md-block" style="background-color: white;">
                            <p class="h4-responsive text center text-md-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique labore ut ipsam eaque neque non at laboriosam totam, maxime nobis sunt quibusdam in, ex suscipit? Sit in obcaecati, esse neque.</p>
                        </div>
                        <!--Formulario-->
                        <div class="col-md-6">
                            <div class="card"> 
                                <div class="card-body">
                                    <h1 class="indigo-text h1-responsive"><b>ESTEMOS EN CONTACTO</b></h1>
                                    <hr class="bg-light">
                                    <form>
                                        <div class="md-form">
                                            <i class="fas fa-user prefix indigo-text"></i>
                                            <input type="text" id="nombre" class="form-control inputs">
                                            <label for="nombre">Nombre: </label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-envelope prefix indigo-text"></i>
                                            <input type="text" id="email" class="form-control inputs">
                                            <label for="email">Correo: </label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-phone prefix indigo-text"></i>
                                            <input type="text" id="telefono" class="form-control inputs">
                                            <label for="telefono">Telefono: </label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-edit prefix indigo-text"></i>
                                            <input type="text" id="texto" class="lg-textarea inputs">
                                            <label for="texto">Ingrese su comentario: </label>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-indigo">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.6422149224936!2d-70.59662508386555!3d-33.58863768073459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d71590d2e49b%3A0x57fa73712a9f12c4!2sEl%20Belloto%201103%2C%20Puente%20Alto%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1569622626586!5m2!1ses-419!2scl" width="1920" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </section>
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