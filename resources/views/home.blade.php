<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!--ByJesusHilarioJuarezOrtiz-->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comisión Federal de Electricidad</title>

        <link rel="stylesheet" href="build/assets/app.css">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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

<span> <img src="../resources/css/lista.png" id="boton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" 
aria-controls="offcanvasExample"></span>
<div class="container">


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




          <div class="row text-center" >
            <div class="col" >
              <img src="../resources/css/FoquitoCFE.jpg">
  
                <h2>Vamos a elegir un Formato Ing. {{ Auth::user()->name }}!</h2>
            
            </div>
          </div>

</div>

</html>
<!--ByJesusHilarioJuarezOrtiz-->