@include('header')
@include('nav-bar')
<body>

    <div class="content" style="margin-top:70px;">
        <h1 align="center"><strong>Crear Nuevo Alumno</strong></h1>
        <div class="col-md-12 col-lg-12 col-xs-12 mt-4">
            <form class="col-lg-12 col-md-12 col-xs-12" action="{{url('/alumnos')}}" method="post" onsubmit="return validar();" enctype="multipart/form-data">
                {{csrf_field()}}

                @include('errores')

                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="nombre">{{'Nombre Alumno'}}</label>
                        <input type="text" name="nombre" pattern="[A-Z a-z\sáéíóúñ]{2,254}" title="Solo letras" class="form-control" id="Rut" placeholder="Nombre alumno" value="{{old ('nombre')}}">
                    </div>
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="apellido_paterno">{{'Apellido Paterno'}}</label>
                        <input type="text" name="apellido_paterno" class="form-control" pattern="[A-Z a-z\sáéíóúñ]{2,254}" title="Solo Letras" id="apellido_paterno" placeholder="Apellido Paterno" value="{{old ('apellido_paterno')}}">
                    </div>
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="apellido_materno">{{'Apellido Materno'}}</label>
                        <input type="text" name="apellido_materno" class="form-control" id="apellido_materno" pattern="[A-Z a-z\sáéíóúñ]{2,254}" title="Solo Letras" placeholder="Apellido Materno" value="{{old ('apellido_materno')}}">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="rut">{{'RUT'}}</label>
                        <input type="text" name="rut" class="form-control" id="rut" placeholder="18.673.533-1" value="{{old ('rut')}}">
                    </div>
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="celular">{{'Telefono'}}</label>
                        <input type="text" name="celular" class="form-control" id="celular" placeholder="99999999" value="{{old ('celular')}}">
                    </div>
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="correo">{{'Correo'}}</label>
                        <input type="text" name="correo" class="form-control" id="correo" placeholder="cristian@gmail.com" value="{{old ('correo')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="fecha_pago">{{'Fecha Pagos'}}</label>
                        <input type="date" name="fecha_pago" class="form-control" id="fecha_pago" placeholder="" value="{{old ('fecha_pago')}}">
                    </div>  
                    <div class="form-group col-md-12 col-lg-4 col-xs-12">
                        <label for="categoria">{{'Clases'}}</label>
                        <input type="number" name="categoria" class="form-control" id="categoria" placeholder="kick boxing">
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group input-group col-md-12 col-lg-4 col-xs-12">
                        <div class="custom-file custom-file-text">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagen" lang="es">
                                <label class="custom-file-label" for="customFileLang">Foto de perfil</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success btn-block">Agregar</button>
                <a href="{{ url('/alumnos') }}"><i class="btn btn-outline-primary fas fa-edit btn-block">Regresar</i></a>
            </form>
        </div>
    </div>

</body>
<script>
    $custom-file-text: (
        en: "Browse",
        es: "Elegir"
    );
</script>
@include('footer')