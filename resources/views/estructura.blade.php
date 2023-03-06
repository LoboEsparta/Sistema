<head>
  <!-- $fecha =date("Y-m-d H:i:s");-->
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>Radios</title>

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

    
    <a href="{{ url('/vista')}}"><span> <img src="/sistema/resources/css/flecha-izquierda.png" id="boton"></span> </a>
    


<div class="container">


    <h3>Radios {{ $formato->tipo }}</h3>
   
    <div class="row">
      <h5>Moviles/Portatiles</h5>
      <h5>Zona</h5>
      <h4>Tehuacán</h4>
    </div>
    <div class="row">
      <div>
        <label for="" class="form-label">Area/Gerencia</label>
        <input type="text" name="area" class="form-control" value="{{ $formato-> area }}" disabled>
      </div>
    </div>
    <div class="row text-center" >
      <h5>Fecha</h5>
      <div class="col">
      <input id="fecha" type="date" name="fecha" value="{{ $formato-> fecha }}" disabled>
      </div>
    </div>



    <div class="row">
      <h5 id="abajo">Opciones</h5>
      <div class="col">
      <div class="form-check" id="abajo">
      <input type="text" name="Cedula" class="form-control" value="{{ $formato-> Cedula }}" disabled>
          <!--ByJesusHilarioJuarezOrtiz-->
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
      <input type="text" name="Repetidor" class="form-control" value="{{ $formato-> Repetidor }}" disabled>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
      <input type="text" name="UTR" class="form-control" value="{{ $formato-> UTR }}" disabled>
        </div>
      </div>
      <div class="col">
      <div class="form-check" id="abajo">
      <input type="text" name="Otros" class="form-control" value="{{ $formato-> Otros }}" disabled>
        </div>
      </div>
      </div>
        
        
       
      


    <div class="row">
      <h5 id="mantenimiento">Mantenimiento</h5>
      <div class="col">
    
        <div class="form-check" id="abajo">
        
        </div>
      </div>
        <div class="col">
        <div class="form-check" id="abajo">
        <input type="text" name="Mantenimiento" class="form-control" 
        value="{{ $formato-> Mantenimiento }}" disabled>
        </div>
        </div>
        <div class="col">
        <div class="form-check" id="abajo">
        
        </div>
        </div>
      </div>

      
    

    <div class="row">
      <h5>Datos</h5>
      <div class="col">
        <div>
          <label for="" class="form-label">ECO/Ubicación</label>
          <input type="text" name="Ubicacion" class="form-control" value="{{$formato-> Ubicacion}}" disabled>
        </div>
        <div>
          <label for="" class="form-label">Responsable</label>
          <input type="text" name="Responsable" class="form-control" value="{{$formato-> Responsable}}" disabled>
        </div>
        <div>
          <label for="" class="form-label">Nombre/Agencia/Oficina</label>
          <input type="text" name="Oficina" class="form-control" value="{{$formato-> Oficina}}" disabled>
        </div>
        <div>
          <label for="" class="form-label">RPE/Dirección</label>
          <input type="text" name="Direccion" class="form-control" value="{{$formato-> Direccion}}" disabled>
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
          <td><input type="text" name="Marca" id="cuadro" value="{{$formato->Marca }}" disabled></td>
          <!--ByJesusHilarioJuarezOrtiz-->
          <td><input type="text" name="Modelo" id="cuadro" value="{{$formato-> Modelo}}" disabled></td>
          <td><input type="text" name="Serie" id="cuadro" value="{{$formato-> Serie}}" disabled></td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="row">
     <div class="col">
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Potencia}}" disabled name="Potencia">
        <label for="floatingInput">Potencia:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">WATTS</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Reflejo}}" disabled name="Reflejo">
        <label for="floatingInput">Reflejo:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">KHZ</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Modulacion}}" disabled name="Modulacion">
        <label for="floatingInput">Modulación:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Sensibilidad}}" disabled name="Sensibilidad">
        <label for="floatingInput">Sensibilidad:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">KHZ</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Frec}}" disabled name="Frec">
        <label for="floatingInput">Error Frec:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">DBM</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Señal}}" disabled name="Señal">
        <label for="floatingInput">Nivel Señal RX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">c.a</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> RX}}" disabled name="RX">
        <label for="floatingInput">Vpp RX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">c.a</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Tx}}" disabled name="Tx">
        <label for="floatingInput">Vpp TX:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCA</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> VCA}}" disabled name="VCA">
        <label for="floatingInput">Alimentación VCA:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> VCD}}" disabled name="VCD">
        <label for="floatingInput">Alimentación VCD</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Cargador}}" disabled name="Cargador">
        <label for="floatingInput">Cargador de BAT:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">VCD</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Banco}}" disabled name="Banco">
        <label for="floatingInput">Banco de BAT:</label>
      </div>
      <div class="form-floating mb-3">
        <p id="final">CA</p>
        <input type="text" class="form-control" id="floatingInput" value="{{$formato-> Inversor}}" disabled name="Inversor">
        <label for="floatingInput">Inversor:</label>
      </div>
      
     </div>
    </div>

    <div class="row text-center">
      <div class="col">
        <label for="" class="form-label">Valor de Tierras</label>
        <input type="text" class="form-control" value="{{$formato-> Tierras}}" disabled name="Tierras">
      </div>
      <div class="col">
        <label for="" class="form-label">Tiempo de Respaldo</label>
        <input type="text" class="form-control" value="{{$formato-> Respaldo}}" disabled name="Respaldo">
      </div>
    </div>

    <div class="row">
      <div class="col">
      <table class="table table-bordered border-primary-subtle">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">B/D/C</th>
            <th scope="col">Observaciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Antena</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Antena}}" disabled name="Antena"></td>
            <td><input value="{{$formato-> tabla1}}" disabled id="cuadro" name="tabla1"></input></td>
          </tr>
          <tr>
            <td>Cable de Antena</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Cable}}" disabled name="Cable"></td>
            <td><input value="{{$formato-> tabla2}}" disabled id="cuadro" name="tabla2"></input></td>
          </tr>
          <tr>
            <td>Conectores</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Conectores}}" disabled name="Conectores"></td>
            <td><input value="{{$formato-> tabla3}}" disabled id="cuadro" name="tabla3"></input></td>
          </tr>
          <tr>
            <td>Bocina</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato->Bocina }}" disabled name="Bocina"></td>
            <td><input value="{{$formato-> tabla4}}" disabled id="cuadro" name="tabla4"></input></td>
          </tr>
          <tr>
            <td>Cable de Control</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Control}}" disabled name="Control"></td>
            <td><input value="{{$formato-> tabla5}}" disabled disabled id="cuadro" name="tabla5"></input></td>
          </tr>
          <tr>
            <td>Cabeza de Control</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Cabeza}}" disabled name="Cabeza"></td>
            <td><input value="{{$formato-> tabla6}}" disabled id="cuadro" name="tabla6"></input></td>
          </tr>
          <tr>
            <td>Terminal (BAT)</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato->Terminal }}" disabled name="Terminal"></td>
            <td><input value="{{$formato-> tabla7}}" disabled id="cuadro" name="tabla7"></input></td>
          </tr>
          <tr>
            <td>Cableado de VCD</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato->Cableado }}" disabled name="Cableado"></td>
            <td><input value="{{$formato-> tabla8}}" disabled id="cuadro" name="tabla8"></input></td>
          </tr>
          <tr>
            <td>Fusible (RX-TX)</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Fusible}}" disabled name="Fusible"></td>
            <td><input value="{{$formato-> tabla9}}" disabled id="cuadro" name="tabla9"></input></td>
          </tr>
          <tr>
            <td>Portafusible</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Portafusible}}" disabled name="Portafusible"></td>
            <td><input value="{{$formato-> tabla10}}" disabled id="cuadro" name="tabla10"></input></td>
          </tr>
          <tr>
            <td>Terminal (B-)</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Terminalb}}" disabled name="Terminalb"></td>
            <td><input value="{{$formato-> tabla11}}" disabled id="cuadro" name="tabla11"></input></td>
          </tr>
          <tr>
            <td>Cargador BAT</td>
            <!--ByJesusHilarioJuarezOrtiz-->
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Cargadorbat}}" disabled name="Cargadorbat"></td>
            <td><input value="{{$formato-> tabla12}}" disabled id="cuadro" name="tabla12"></input></td>
          </tr>
          <tr>
            <td>Limpieza GRAL</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Limpieza}}" disabled name="Limpieza"></td>
            <td><input value="{{$formato-> tabla13}}" disabled id="cuadro" name="tabla13"></input></td>
          </tr>
          <tr>
            <td>Bateria Movil</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formato-> Bateria}}" disabled name="Bateria"></td>
            <td><input value="{{$formato-> tabla14}}" disabled id="cuadro" name="tabla14"></input></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>

 


    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Observaciones: </label>
          <textarea class="form-control" rows="3" name="textarea" disabled>{{$formato-> textarea}}</textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Inspecciono: </span>
          <input type="text" class="form-control" aria-label="" name="inspecciono" value="{{$formato-> inspecciono}}" disabled>
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text">R.P.E</span>
          <input type="text" class="form-control" aria-label="RPE" name="rpe" value="{{$formato-> rpe}}" disabled>
          <span class="input-group-text">Firma</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Historial del equipo: </label>
          <textarea class="form-control" rows="3" name="textoarea" value="{{$formato-> textoarea}}" disabled>{{$formato-> textoarea}}</textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Vo. Bo.</span>
          <input type="text" class="form-control" rows="3" value="{{$formato-> usuario}}" disabled aria-label="Usuario" name="usuario">
        </div>
      </div>
    </div>

    <div class="row">
      <h5>*** fotografia ***</h5>
        <div class="col" id="medio">
        <img src="{{ asset('storage').'/'.$formato->Foto }}" alt="200" width="200">
        </div>
      </div>


    <div class="row">
      <div class="col"></div>
      <div class="col text-center">
        <a href="{{ url('vista')}}" id="atras" class="btn btn-primary">Atras</a>
      </div>
      <div class="col"></div>
    </div>
    






    </form>

  </div>



  </body>
  <!--ByJesusHilarioJuarezOrtiz-->