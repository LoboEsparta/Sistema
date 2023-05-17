<head>
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="build/assets/app-4c85f5d2.js"></script>
        <link rel="stylesheet" href="build/assets/app.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Radios UHF-VHF</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>
      

    </head>

    <style>

      #formulario{
        float: right;
      }

    </style>

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
    <h4>Listado de Radios UHF</h4>
      <div class="row">
        <div class="col">

        <form class="form-inline my-2 my-lg-0 row" id="formulario" role="search">
          <div class="col-auto">
          <input name="buscarpor" class="form-control" type="search" placeholder="Buscar" aria-label="Search" value="{{ $buscarpor }}">
          </div>
          <div class="col-auto">
          <button class="btn btn-success" type="submit">Buscar</button>
          </div>
      </form>

          <table class="table">
  <thead>
    <tr>
        <th>id</th>
      <th scope="col">Radio Serie</th>
      <th scope="col">Fecha</th>
      <th scope="col">Area</th>
      <th scope="col">ECO/Ubicación</th>
      <th scope="col">Ver formato</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datosvista as $dato)
    <tr>
      <td> {{$dato->id}} </td>
      <th>Radio Serie: {{$dato->Serie}}</th>
      <td>{{$dato->fecha}}</td>
      <td>{{$dato->area}}</td>
      <td>{{$dato->Ubicacion}}</td>
            <!--<td> <img src="{{ asset('storage').'/'. $dato->Foto }}" alt="200" width="200"> </td>-->

      <td>

      <a href="{{url ('/vista/'.$dato->id.'/edit') }}">
        Visualizar
      </a>
      </td>
    </tr>
@endforeach

</tbody>


</table>
{{ $datosvista-> links()}}
</div>
</div>
</div>



    <div class="row text-center">
    <h4>Listado de Radios VHF</h4>
      <div class="row">
        <div class="col">

        <form class="form-inline my-2 my-lg-0 row" id="formulario" role="search">
          <div class="col-auto">
          <input name="buscar" class="form-control" type="search" placeholder="Buscar" aria-label="Search" value="{{ $buscar }}">
          </div>
          <div class="col-auto">
          <button class="btn btn-success" type="submit">Buscar</button>
          </div>
      </form>
      <br>

          <table class="table">
          <thead>
    <tr>
        <th>id</th>
      <th scope="col">Radio Serie</th>
      <th scope="col">Fecha</th>
      <th scope="col">Area</th>
      <th scope="col">ECO/Ubicación</th>
      <th scope="col">Ver formato</th>
    </tr>
  </thead>
  @foreach ($obtener as $tener)
    <tr>
      <td> {{$tener->id}} </td>
      <th>Radio Serie: {{$tener->Serie}}</th>
      <td>{{$tener->fecha}}</td>
      <td>{{$tener->area}}</td>
      <td>{{$tener->Ubicacion}}</td>
      <td>

      <a href="{{url ('/radiovhf/'.$tener->id.'/edit') }}">
        Visualizar
      </a>
      </td>
    </tr>

    @endforeach
  </tbody>



</table>
{{ $obtener-> links()}}     
      </div>
    </div>

    <br>
    <br>
    <br>
<div class="row">

</div>
<div class="row"></div>

  </body>
  






  <!--ByJesusHilarioJuarezOrtiz-->