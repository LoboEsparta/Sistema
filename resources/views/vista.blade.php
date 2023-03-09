<?php

$uhf = "UHF";
$vhf = "VHF";

?>



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
        <li><a class="lista" href="{{ url('vista')}}">Login Admin</a></li>
        <li><a class="lista" href="#">Formato 4</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">

    <div class="row text-center">
    <h4>Listado de Radios UHF</h4>
      <div class="row">
        <div class="col">
          <table class="table">
  <thead>
    <tr>
        <th>id</th>
      <th scope="col">Formato</th>
      <th scope="col">Fecha</th>
      <th scope="col">Zona</th>
      <th scope="col">Ver formato</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datos as $dato)
    <tr>
      <td> {{$dato->id}} </td>
      <td>Formato No. {{$dato->id}} Radio: {{$uhf}}</td>
      <td>{{$dato->fecha}}</td>
      <td>Tehuacán</td>
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
</div>



    <div class="row text-center">
    <h4>Listado de Radios VHF</h4>
      <div class="row">
        <div class="col">
          <table class="table">
          <thead>
    <tr>
        <th>id</th>
      <th scope="col">Formato</th>
      <th scope="col">Fecha</th>
      <th scope="col">Zona</th>
      <th scope="col">Ver formato</th>
    </tr>
  </thead>
  
@foreach ($obtener as $tener)
    <tr>
      <td> {{$tener->id}} </td>
      <td>Formato No. {{$tener->id}} Radio: {{$vhf}}</td>
      <td>{{$tener->fecha}}</td>
      <td>Tehuacán</td>
      <td>

      <a href="{{url ('/radiovhf/'.$tener->id.'/edit') }}">
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