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
      Registro de Personal</a>
  </div>
</div>


<div class="row">
    <div class="col">
    <table class="table table-striped border-dark text-center">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>UserName</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Serie</th>
      <th>Editar</th>
    </tr>
  </thead>
  @foreach ($personal as $persona)
  <tbody>
    <tr>
      <th scope="row">{{ $persona -> id}}</th>
      <td>{{ $persona -> name }}</td>
      <td>{{ $persona -> username}}</td>
      <td>{{ $persona -> marca}}</td>
      <td>{{ $persona -> modelo}}</td>
      <td>{{ $persona -> serie}}</td>
      <td>
      <a href="{{url ('/editar/'.$persona->id.'/edit') }}">
        Editar
      </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>


  <!--ByJesusHilarioJuarezOrtiz-->