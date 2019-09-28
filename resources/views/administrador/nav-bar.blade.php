<style>
    .fondo{
        height: 100vh;
        background: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
   .gris {
        background: rgba(0, 0, 0, 0.199);
    }

    .top-nav-collapse {
        background: rgba(0, 0, 0, 0.774) !important;
    }
    .imgrfit{
        max-height: 20px;
        max-width: 20px;
        background-color: white;
        border-radius: 50px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top top-nav-collapse ">
 <div class="container">
    <a class="navbar-brand" href="/">Okinawa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/alumnos">Alumnos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" hidden>
        <a class="nav-link" href="#">Profesores</a>
      </li>
      <li class="nav-item" hidden>
        <a class="nav-link" href="#">Stock</a>
      </li>
      <li class="nav-item dropdown" hidden>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
            <a href="https://www.facebook.com/gimnasio.okinawa.395?ref=br_rs" target="_blank" class="nav-link">
                <i class="fab fa-facebook-square"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="https://www.instagram.com/okinawa_gym/" target="_blank" class="nav-link">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="http://panel.rfit.cl/#/login" class="nav-link" target="_blank">
                <img class="imgrfit" src="{{ asset('imagenes/rfitlogo.png') }}" alt="">
            </a>
        </li>
    </ul>
  </div>
 </div>
  
</nav>