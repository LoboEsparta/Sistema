<?php
 date_default_timezone_set('America/Mexico_City');
 $fecha =date("Y-m-d");

 ?>

<head>
  <!-- $fecha =date("Y-m-d H:i:s");-->
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <script src="build/assets/app-4c85f5d2.js"></script>
        <link rel="stylesheet" href="build/assets/app.css">

        <title>Radio VHF</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
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
        <li><a class="lista" href="{{ url('principal')}}">Admin</a></li>
        
      </ul>
    </div>
  </div>
</div>

<!--                     Aqui empieza el contenido del sistema web            -->

<div class="container" id="contenido">
    <h3>Mantenimiento Radio VHF</h3>
    <form action= "{{ url('/radiovhf') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <h5>Moviles/Portatiles</h5>
      <h5>Zona</h5>
      <h4>Tehuacán</h4>
    </div>
    <div class="row">
      <div>
        <label for="" class="form-label">Area/Gerencia</label>
        <input type="hidden" value="VHF" name="tipo">
        <input type="text" name="area" class="form-control" placeholder="Area/Gerencia" required>
      </div>
    </div>
    <div class="row text-center" >
      <h5>Fecha</h5>
      <div class="col">
      <input id="fecha" type="date" name="fecha" value="<?= $fecha ?>">
      </div>
    </div>



    <div class="row">
      <h5 id="abajo">Opciones</h5>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="Movil" name="Movil">
          <label class="form-check-label" for="Check1">
            Movil
          </label>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="Portatil" name="Portatil">
          <label class="form-check-label" for="Check2">
            Portatil
          </label>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="Base" name="Base">
          <label class="form-check-label" for="Check3">
            Base
          </label>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="Repetidor" name="Repetidor">
          <label class="form-check-label" for="Check10">
            Repetidor
          </label>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="Otros" name="Otros">
          <label class="form-check-label" for="Check10">
            Otros
          </label>
        </div>
      </div>
      </div>
        
        
       
      


    <div class="row">
      <h5 id="mantenimiento">Mantenimiento</h5>
      <div class="col">
        <div class="form-check" id="abajo">
          <input class="form-check-input" type="radio" value="Preventivo" name="Mantenimiento">
          <label class="form-check-label" for="Check1">
            Preventivo
          </label>
        </div>
      </div>
      <div class="col">
        <div class="form-check" id="abajo">
          <input class="form-check-input" type="radio" value="Correctivo" name="Mantenimiento">
          <label class="form-check-label" for="Check1">
            Correctivo
          </label>
        </div>
        </div>
        <div class="col">
        <div class="form-check" id="abajo">
          <input class="form-check-input" type="radio" value="Retiro" name="Mantenimiento">
          <label class="form-check-label" for="Check1">
            Retiro
          </label>
        </div>
        </div>
        <div class="col">
        <div class="form-check" id="abajo">
          <input class="form-check-input" type="radio" value="Instalacion" name="Mantenimiento">
          <label class="form-check-label" for="Check1">
            Instalación
          </label>
        </div>
        </div>
      </div>

      
    

      
    <Style>
  #titulo{
    font-size: 20px
  }
  #marco{
    border: .5px;
    border-style: solid;
    border-color: rgb(223 223 223);
  }
</Style>

<div class="row text-center">
<h5>Datos</h5>
<span>Realiza tu busqueda por el numero Economico y espera 5 segundos mientras se hace tu busqueda</span><br>
</div>

<div class="row text-center" id="marco">
  
  <div class="col">
  <br>
  <label for="" class="form-label" id="titulo" >ECO/Ubicación:</label>
          <!--ByJesusHilarioJuarezOrtiz-->
          <input type="text" name="Ubicacion" class="Economico form-control" placeholder="ECO/Ubicación" required><br>
          <label for="" id="titulo" class="form-label">Responsable del equipo:</label>
          <input type="text" name="Responsable" class="Responsable form-control" readonly placeholder="Responsable" required>
          <label for="" id="titulo" class="form-label">Nombre/Agencia/Oficina:</label>
          <input type="text" name="Oficina" class="Oficina form-control" readonly placeholder="Nombre/Agencia/Oficina" required>
          <label for="" id="titulo" class="form-label">RPE/Dirección:</label>
          <input type="text" name="Direccion" class="rpe form-control" readonly placeholder="RPE/Dirección" required>
        
<br>
    <span id="titulo"> Serie: </span>
    <input class="Serie" style="width: 250px" name="Serie" readonly placeholder="Escribe aqui el numero de Serie" id="cuadro">

    <span id="titulo"> Marca: </span>
    <input class="Marca" style="width: 250px" name="Marca" readonly placeholder="Marca" id="cuadro">

    <span id="titulo"> Modelo: </span>
    <input class="Modelo" style="width: 250px" name="Modelo" readonly placeholder="Modelo" id="cuadro"><br>

<br>

</div>
</div>


    <script type="text/javascript">

$(document).on('keyup','.Economico',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			console.log(prod_id + " Prueba de marca");
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findmarca')!!}',
				data:{'id':prod_id},
				dataType:'json',
				success:function(data){
					console.log(" Abajo la marca");
					console.log(data.Marca + "Que guarda la variable"); 
					a.find('.Marca').val(data.Marca);
          a.find('.Serie').val(data.Serie);
          a.find('.Responsable').val(data.Responsable);

				},
				error:function(){

				}
			});
    });


  


$(document).on('keyup','.Economico',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			console.log(prod_id + " Prueba de modelo");
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findmodelo')!!}',
				data:{'id':prod_id},
				dataType:'json',
				success:function(data){
					console.log(" Abajo la el Modelo");
					console.log(data.Modelo); 
					a.find('.Modelo').val(data.Modelo);
          a.find('.Oficina').val(data.Oficina);
          a.find('.rpe').val(data.rpe);

				},
				error:function(){

				}
			});
    });




</script>

    

    <div class="row">
     <div class="col">
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Potencia DBM:" name="Potencia" required>
        <label for="floatingInput">Potencia:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">WATTS</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Reflejo" name="Reflejo" required>
        <label for="floatingInput">Reflejo:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">KHZ</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Modulación" name="Modulacion" required>
        <label for="floatingInput">Modulación:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Sensibilidad" required>
        <label for="floatingInput">Sensibilidad:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">KHZ</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Frec" required>
        <label for="floatingInput">Error Frec:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Señal" required>
        <label for="floatingInput">Nivel Señal RX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">c.a</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="RX" required>
        <label for="floatingInput">Vpp RX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">c.a</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Tx" required>
        <label for="floatingInput">Vpp TX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCA</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="VCA" required>
        <label for="floatingInput">Alimentación VCA:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="VCD" required>
        <label for="floatingInput">Alimentación VCD</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Cargador" required>
        <label for="floatingInput">Cargador de BAT:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Banco" required>
        <label for="floatingInput">Banco de BAT:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">CA</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Inversor" name="Inversor" required>
        <label for="floatingInput">Inversor:</label>
      </div>
      
     </div>
    </div>

    <div class="row text-center">
      <div class="col">
        <label for="" class="form-label">Valor de Tierras</label>
        <input type="text" class="form-control" placeholder="Ohmio u Ohm" name="Tierras" required>
      </div>
      <div class="col">
        <label for="" class="form-label">Tiempo de Respaldo</label>
        <input type="text" class="form-control" placeholder="Minutos" name="Respaldo" required>
      </div>
    </div>

    <div class="row">
      <div class="col">
      <table class="table table-bordered border-primary-subtle">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">B</th>
            <th scope="col">D</th>
            <th scope="col">C</th>
            <th scope="col">*******</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Antena</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Antena" required></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Antena" required></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Antena" required></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla1"></input></td>
          </tr>
          <tr>
            <td>Cable de Antena</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Cable"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Cable"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Cable"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla2"></input></td>
          </tr>
          <tr>
            <td>Conectores</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Conectores"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Conectores"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Conectores"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla3"></input></td>
          </tr>
          <tr>
            <td>Bocina</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Bocina"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Bocina"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Bocina"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla4"></input></td>
          </tr>
          <tr>
            <td>Cable de Control</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Control"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Control"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Control"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla5"></input></td>
          </tr>
          <tr>
            <td>Cabeza de Control</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Cabeza"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Cabeza"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Cabeza"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla6"></input></td>
          </tr>
          <tr>
            <td>Terminal (BAT)</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Terminal"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Terminal"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Terminal"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla7"></input></td>
          </tr>
          <tr>
            <td>Cableado de VCD</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Cableado"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Cableado"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Cableado"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla8"></input></td>
          </tr>
          <tr>
            <td>Fusible (RX-TX)</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Fusible"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Fusible"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Fusible"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla9"></input></td>
          </tr>
          <tr>
            <td>Portafusible</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Portafusible"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Portafusible"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Portafusible"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla10"></input></td>
          </tr>
          <tr>
            <td>Terminal (B-)</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Terminalb"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Terminalb"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Terminalb"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla11"></input></td>
          </tr>
          <tr>
            <td>Cargador BAT</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Cargadorbat"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Cargadorbat"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Cargadorbat"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla12"></input></td>
          </tr>
          <tr>
            <td>Limpieza GRAL</td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Limpieza"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Limpieza"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Limpieza"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla13"></input></td>
          </tr>
          <tr>
            <td>Bateria Movil</td>
            <td id="tabla"><input class="form-check-input"  type="radio" value="B" name="Bateria"></td>
            <td id="tabla"><input class="form-check-input"  type="radio" value="D" name="Bateria"></td>
            <td id="tabla"><input class="form-check-input"  type="radio" value="C" name="Bateria"></td>
            <td><input placeholder="Escribe aqui..." id="cuadro" name="tabla14"></input></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>

    <div class="container text-center">
      <div class="row">
        <div class="col">
        
        </div>
        <div class="col-6">
          <h5>Frecuencias</h5>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">TX</th>
                <th scope="col">Rx</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>161.82500</td>
                <td>166.75000</td>
                
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>157.12500</td>
                <td>155.10000</td>
                
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>163.37500</td>
                <td>162.72500</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>157.95000</td>
                <td>163.65000</td>
                
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>158.10000</td>
                <td>152.42500</td>
                
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>163.35000</td>
                <td>162.80000</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>158.32500</td>
                <td>158.32500</td>
                
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>163.65000</td>
                <td>159.95000</td>
                
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>163.82500</td>
                <td>162.82500</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>160.1</td>
                <td>156.225</td>
                
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col">
         
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Observaciones: </label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea"></textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Inspecciono: </span>
          <input type="text" class="form-control" aria-label="" name="inspecciono" required>
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text">R.P.E</span>
          <input type="text" class="form-control" placeholder="R.P.E" aria-label="RPE" name="rpe" value="{{ Auth::user()->serie }}" readonly>
          <span class="input-group-text">Firma</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="usuario" name="usuario" value="{{ Auth::user()->name }}" readonly>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <span class="input-group-text">Vo. Bo.</span>
          <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" name="VoBo" required>
        </div>
      </div>
    </div>

    <div class="row">
      <h5>En caso de utilizar evidencia fotografica saque las fotografias y despues seleccione sus archivo</h5>
      <h5>***Solo se puede enviar hasta 3 fotografias***</h5>
        <div class="col">
        <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" 
  aria-label="Upload" name="Foto" id="Foto">
        </div>  
        <div class="col">
        <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" 
  aria-label="Upload" name="Fotodos" id="Fotodos">
        </div>
        <div class="col">
        <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" 
  aria-label="Upload" name="Fototres" id="Fototres">
        </div>
      </div>
  
  <h3 id="margen">¡¡Asegurate de que todos los datos introducidos esten correctos antes de su envio!!</h3>


<div class="row">
  <div class="col"></div>
  <div class="col text-center">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
  <div class="col"></div>
</div>







</form>

</div>

</div>
        



  </body>
  <!--ByJesusHilarioJuarezOrtiz-->