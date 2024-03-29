<head>
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="build/assets/app-4c85f5d2.js"></script>
        <link rel="stylesheet" href="build/assets/app.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Personal</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>
      

    </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
   <a class="navbar-brand" href="{{ url('/home')}}">Comisión Federal de Electricidad</a>
  <div>
  <li class="nav-item dropdown" id="color">
      <a id="lista" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" 
      aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
      </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="lista">
         <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
     </div>
   </li>
  </div>
</div>  
  </nav>


    <body>

    <div class="row">
  <div class="col">
      <a href="{{ url('/principal')}}"><span> <img src="/sistema/resources/css/flecha-izquierda.png" id="boton"></span> </a>

  </div>
</div>




<div class="container">


<div class="row">
  <div class="col text-end">
    <a href="{{ url('registro') }}" id="registro" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
      Registro de Equipo</a>
  </div>
</div>

<h3>Listado de Equipo</h3>
<div class="row">
    <div class="col">
    <table class="table table-striped border-dark text-center">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>UserName</th>
      <th>R.P.E</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  @foreach ($personal as $persona)
  <tbody>
    <tr>
      <th scope="row">{{ $persona -> id}}</th>
      <td>{{ $persona -> name }}</td>
      <td>{{ $persona -> username}}</td>
      <td>{{ $persona -> serie}}</td>
      <td>
        <form action="{{ url ('/editar/'.$persona->id)}}" method="post">
          @csrf
          {{ method_field('DELETE') }}
        <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>


<div class="row">
  <div class="col text-end">
    <a href="{{ url('radios') }}" id="registro" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
      Registro de Radios</a>
  </div>
</div>






<h3>Radios Listado</h3>



<div class="row">
    <div class="col">
    <table class="table table-striped border-dark text-center">
  <thead>
    <tr>
      <th>#</th>
      <th>No.Economico</th>
      <th>Responsable</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Serie</th>
      <th>Nombre/Agencia/Oficina</th>
      <th>RPE</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  @foreach ($radios as $radio)
  <tbody>
    <tr>
      <th scope="row">{{ $radio -> id}}</th>
      <td>{{ $radio -> Economico }}</td>
      <td>{{ $radio -> Responsable}}</td>
      <td>{{ $radio -> Marca }}</td>
      <td>{{ $radio -> Modelo}}</td>
      <td>{{ $radio -> Serie}}</td>
      <td>{{ $radio -> Oficina}}</td>
      <td>{{ $radio -> rpe}}</td>
      <td>
      <a href="{{url ('/editar/'.$radio->id.'/edit') }}">
        Editar
      </a>
      </td>
      <td>
        <form action="{{ url ('/personal/'.$radio->id)}}" method="post">
          @csrf
          {{ method_field('DELETE') }}
        <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>






  <!--ByJesusHilarioJuarezOrtiz-->