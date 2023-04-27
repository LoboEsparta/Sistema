<head>
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="build/assets/app-4c85f5d2.js"></script>
        <link rel="stylesheet" href="build/assets/app.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Agregar Radios</title>

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
  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Radios') }}</div>

                <div class="card-body">
                    <form action="{{ url ('/radios') }}" method="post">
                        @csrf

                        <div class="mb-3">
                        <label for="Marca" class="form-label">Marca:</label>
                        <input type="text" class="form-control" id="Marca" placeholder="Marca" name="Marca" required>
                        </div>
                        <div class="mb-3">
                        <label for="Modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="Modelo" placeholder="Modelo" name="Modelo" required>
                        </div>
                        <div class="mb-3">
                        <label for="Serie" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="Serie" placeholder="Serie" name="Serie" required>
                        </div>


                        <div class="row mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{url ('principal')}}"  class="btn btn-dark">Atras</a>