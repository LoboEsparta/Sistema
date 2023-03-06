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
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>Radio VHF</title>

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
        <li><a class="lista" href="{{ url('radivuhf')}}">VHF Radio</a></li>
        <li><a class="lista" href="{{ url('radiouhf')}}">UHF Radio</a></li>
        <li><a class="lista" href="{{ url('vista')}}">Login Admin</a></li>
        <li><a class="lista" href="#">Formato 4</a></li>
      </ul>
    </div>
  </div>
</div>

<!--                     Aqui empieza el contenido del sistema web            -->

<div class="container">
    <h3>Formato de Mantenimiento Radio VHF</h3>
    <form action= "{{ url('/radiovhf') }}" method="post" enctype="multipart/form-data">
@csrf

    <div class="row">
      <h5>Moviles/Portatiles</h5>
      <input type="hidden" value="VHF" name="tipo">
      <h5>Zona</h5>
      <h4>Tehuacán</h4>
    </div>
    <div class="row">
      <div>
        <label for="" class="form-label">Area/Gerencia</label>
        <input type="text" name="area" class="form-control" placeholder="Area/Gerencia">
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
          <input class="form-check-input" type="checkbox" value="Cedula" name="Cedula">
          <label class="form-check-label" for="Check1">
            Cedula
          </label>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="Repetidor" name="Repetidor">
          <label class="form-check-label" for="Check2">
            Repetidor
          </label>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
          <input class="form-check-input" type="checkbox" value="UTR" name="UTR">
          <label class="form-check-label" for="Check3">
            UTR
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

      
    

    <div class="row">
      <h5>Datos</h5>
      <div class="col">
        <div>
          <label for="" class="form-label">ECO/Ubicación</label>
          <input type="text" name="Ubicacion" class="form-control" placeholder="ECO/Ubicación">
        </div>
        <div>
          <label for="" class="form-label">Responsable</label>
          <input type="text" name="Responsable" class="form-control" placeholder="Responsable">
        </div>
        <div>
          <label for="" class="form-label">Nombre/Agencia/Oficina</label>
          <input type="text" name="Oficina" class="form-control" placeholder="Nombre/Agencia/Oficina">
        </div>
        <div>
          <label for="" class="form-label">RPE/Dirección</label>
          <input type="text" name="Direccion" class="form-control" placeholder="RPE/Dirección">
        </div>
      </div>
    </div>

    <div class="row text-center" id="bordes">          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Serie</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" name="Marca" id="cuadro" placeholder="Marca"></td>
          <td><input type="text" name="Modelo" id="cuadro" placeholder="Modelo"></td>
          <td><input type="text" name="Serie" id="cuadro" placeholder="Serie"></td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="row">
     <div class="col">
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Potencia DBM:" name="Potencia">
        <label for="floatingInput">Potencia:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">WATTS</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Reflejo" name="Reflejo">
        <label for="floatingInput">Reflejo:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">KHZ</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Modulación" name="Modulacion">
        <label for="floatingInput">Modulación:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Sensibilidad">
        <label for="floatingInput">Sensibilidad:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">KHZ</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Frec">
        <label for="floatingInput">Error Frec:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Señal">
        <label for="floatingInput">Nivel Señal RX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">c.a</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="RX">
        <label for="floatingInput">Vpp RX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">c.a</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Tx">
        <label for="floatingInput">Vpp TX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCA</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="VCA">
        <label for="floatingInput">Alimentación VCA:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="VCD">
        <label for="floatingInput">Alimentación VCD</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Cargador">
        <label for="floatingInput">Cargador de BAT:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Banco">
        <label for="floatingInput">Banco de BAT:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">CA</p>
        <input type="text" class="form-control" id="floatingInput" placeholder="Inversor" name="Inversor">
        <label for="floatingInput">Inversor:</label>
      </div>
      
     </div>
    </div>

    <div class="row text-center">
      <div class="col">
        <label for="" class="form-label">Valor de Tierras</label>
        <input type="text" class="form-control" placeholder="Ohmio u Ohm" name="Tierras">
      </div>
      <div class="col">
        <label for="" class="form-label">Tiempo de Respaldo</label>
        <input type="text" class="form-control" placeholder="Minutos" name="Respaldo">
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
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="B" name="Antena"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="D" name="Antena"></td>
            <td id="tabla"><input class="form-check-input" id="tabla" type="radio" value="C" name="Antena"></td>
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
          <input type="text" class="form-control" aria-label="" name="inspecciono">
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text">R.P.E</span>
          <input type="text" class="form-control" placeholder="R.P.E" aria-label="RPE" name="rpe">
          <span class="input-group-text">Firma</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Historial del equipo: </label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textoarea"></textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Vo. Bo.</span>
          <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" name="usuario">
        </div>
      </div>
    </div>

    <div class="row">
    <h5>***En caso de utilizar evidencia fotografica seleccione su archivo***</h5>
        <div class="col">
        <div class="">
  <input type="file" class="form-control" name="Foto" aria-label="Upload">
</div>
        </div>
      </div>

    <h3 id="margen">¡¡Asegurate de que todos los datos introducidos esten correctos antes de su envio!!</h3>


    <div class="row">
      <div class="col"></div>
      <div class="col text-center">
        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#exampleModal">Enviar</button>
      </div>
      <div class="col"></div>
    </div>
    






    </form>

  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Listoooo!!!!!</h5>
      </div>
      <div class="modal-body">
        Se envio tu archivo correctamente c:
      </div>
    </div>
  </div>
</div>






  </body>
  <!--ByJesusHilarioJuarezOrtiz-->