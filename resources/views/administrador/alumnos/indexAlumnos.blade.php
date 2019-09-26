@include('header')
@include('nav-bar')
<body>

 @if(Session::has('Mensaje'))

    <div class="alert alert-success" style="margin-top: 70px;">
        {{ Session::get('Mensaje')}}
    </div>
    @endif

    <div class="d-flex justify-content-between col-md-12 col-lg-12 col-xd-12 align-items-end mb-3" style="margin-top: 70px;">
        <h1 class="pb-1">Listado de Alumnos</h1>
        <p>
            <a href="/alumnos/create" class="btn btn-sm btn-outline-primary">Nuevo Alumno</a>
        </p>
    </div>
<!--<section class="fondo">
   {{$alumnos}}
</section>-->
@if($alumnos->isNotEmpty())
    <div class="col-md-12 col-lg-12 col-xs-12 table-responsive">
        <table id="libros" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead class="black white-text">
                <tr>
                    <th class="text-center" style="display:none;" scope="col">{{'iteracion'}}</th>
                    <th class="text-center" scope="col th-sm">{{'#id'}}</th>
                    <th class="text-center" scope="col th-sm">{{'#Nombre'}}</th>
                    <th class="text-center" scope="col th-sm">{{'#Apellido Materno'}}</th>
                    <th class="text-center" scope="col th-sm">{{'#Apellido Paterno'}}</th>
                    <th class="text-center" scope="col th-sm">{{'#Estado Mensualidad'}}</th>
                    <th class="text-center" scope="col th-sm">{{'#Acciones'}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr class="text-center">
                    <td class="text-center" style="display:none;">{{$loop->iteration}}</td>
                    <td class="text-center">{{$alumno->id}}</td>
                    <td class="text-center">{{$alumno->nombre}}</td>
                    <td class="text-center">{{$alumno->apellido_materno}}</td>
                    <td class="text-center">{{$alumno->apellido_paterno}}</td>
                    <td class="text-center">{{$alumno->mensualidad}}</td>
                    <td>
                        <form action="{{ url('/alumnos/'. $alumno->id) }}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{ route('alumnos.edit', $alumno) }}"><i class="btn btn-outline-success btn-sm fas fa-edit"></i></a>
                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm ('Borrar?')"><i class=" fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h4 align="center" class="mt-3">No Existen Alumnos registrados</h4>
    @endif
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
@include('footer')