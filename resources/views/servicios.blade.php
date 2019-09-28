@include('header')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
    @include('navbar')
    <div class="section black  text-white">
        <div class="content"> 
            <div class="content-wrap">
                <div class="section">
                    <div class="container clearfix">
                        <h3 class="center" style="margin-top: 70px;"><u>Servicios</u></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, repudiandae suscipit quis iste cum dolorem ex aliquid, sapiente obcaecati deleniti praesentium maiores aspernatur ullam eius minus rem vitae voluptas consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="" style="height:1000px;"></div>
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