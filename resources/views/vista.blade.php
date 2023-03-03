<head>
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>Radios UHF-VHF</title>

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
   <a class="navbar-brand" href="{{ url('/inicio')}}">Comisión Federal de Electricidad</a>
  </div>
    </nav>



    <body>

    <span> <img src="../resources/css/lista.png" id="boton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" 
aria-controls="offcanvasExample"></span>


<div class="offcanvas offcanvas-start  text-bg-primary" tabindex="1" id="offcanvasExample" 
aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Lista de Formatos</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="">
      <ul class="">
        <li><a class="lista" href="{{ url('radiovhf')}}">VHF Radio</a></li>
        <li><a class="lista" href="{{ url('radiouhf')}}">UHF Radio</a></li>
        <li><a class="lista" href="{{ url('inicio')}}">Radios UHF y VHF</a></li>
        <li><a class="lista" href="{{ url('vista')}}">Login Admin</a></li>
        <li><a class="lista" href="#">Formato 4</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">


    <h3>Listado de Radios UHF y VHF</h3>
    <div class="row text-center">
      <div class="row">
        <div class="col">
          <table class="table">
  <thead>
    <tr>
        <th>id</th>
      <th scope="col">Formato</th>
      <th scope="col">Fecha</th>
      <th scope="col">Zona</th>
      <th scope="col">Visualizar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datos as $dato)
    <tr>
      <td> {{$dato->id}} </td>
      <td>Formato No#{{$dato->id}}</td>
      <td>{{$dato->fecha}}</td>
      <td>Tehuacán</td>
      <td>
        <img src="{{ asset('storage').'/'.$dato->Foto }}" alt="200" width="200">
      </td>
      <td>

      <a href="{{url ('/vista/'.$dato->id.'/edit') }}">
        Visualizar
      </a>
      </td>
    </tr>
    @endforeach
  </tbody>


</table>
        
      </div>
    </div>
  </body>






  <!--ByJesusHilarioJuarezOrtiz-->