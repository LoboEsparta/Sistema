<head>
  <!-- $fecha =date("Y-m-d H:i:s");-->
  <!--ByJesusHilarioJuarezOrtiz-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="build/assets/app.css">
        <script src="build/assets/app-4c85f5d2.js"></script>

        <title>Radios</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
        crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>
      
<style>

.container{
    margin-top: 2%;
}

h3{
    font-size: 28px;
    font-weight: 650;
}

.row{
    margin-top: 2%;
}

.container h3{
    text-align: center;
}

#contenido{
    outline: 1px solid;
    margin-bottom: 2%;
    padding-top: 2%;
    box-shadow: -2px 6px 15px black; 
    z-index: 2;
}

.row h5{
    text-align: center;
    margin-top: 1%;
    margin-bottom: 1%;
    font-size: 18px;
    font-weight: 700;
}
.row h4{
    text-align: center;
    font-size: 30px;
    font-weight: 500;
}

#fecha{
    width: 50%;
    text-align: center;
    padding-top: 3px;
    padding-bottom: 3px;
    font-size: 19px;
    border-color: rgb(116, 224, 231);
    border-radius: 40px;
}

#abajo{
    margin-bottom: 1%;
}

#cuadro{
    width: 100%;
    padding: 6px 12px;
    border: 0%;
    border: none;
    outline-color: rgb(196, 196, 255);

}

td{
    padding: 0%;
}

#final{
    display: inline-block;
    position: absolute ;
    right: 0;
    top: 20px;
    padding-right: 5px;
    color: rgb(143, 143, 143);
}

/*ByJesusHilarioJuarezOrtiz*/

#margen{
    margin-top: 3%;
}

button{
    margin-top: 2%;
    margin-bottom: 7%;
    width: 100%;
}

#mantenimiento{
    margin-bottom: 3%;
}

body {
    font-family: 'Nunito', sans-serif;
}

#medio{
    text-align: center;
    margin-top: 2%;
}

/*Propiedades de sidemenu*/

#boton{
    margin-left: 2%;
    width: 50px;
    height: 50px;
    margin-top: 1.5%;
    position: absolute;
    cursor: pointer;
   
}

ul{
    list-style: none;
}

li{
    padding-top: 2%;
    padding-bottom: 2%;
    margin-top: 2%;
}

.lista{
    display: block;
    padding-top: 2%;
    padding-bottom: 2%;
    text-decoration: none;
    color: rgb(247, 242, 242);
    width: 100%;
    font-size: 17px;
    border-bottom: 1px solid rgba(255, 255, 255, .5);
    transition: .4s;
}

ul li:hover a{
    padding-left: 10px;
    transition: .4s;
    color: white;
    font-size: 18px;
}

#radiotop{
    margin-top: 5%;
}

#uhf{
    background-color: rgb(51, 40, 40);
    padding: 3%;
    text-decoration: none;
    color: white;
}

#uhf:hover{
    background-color:rgb(65, 52, 52) ;
}

#atras{
    text-decoration: none; 
    width: 100%; 
    margin-top: 7%;
    margin-bottom: 7%;
}

/* Propiedades tabla*/

#tabla{
    text-align: center;
}

/*login*/

#background{
    background-color: rgb(255, 255, 255);
}

#fondo{
    background-color:rgba(0, 0, 0, 0.884);
    margin-top: 5%;
    padding-top: 5%;
    padding-bottom: 9%;
    padding-left: 0%;
    padding-right: 0%;
    width: 60%;

}


#login-label{
    margin-top: 2%;
    margin-bottom: 2%;
    display: block;
    color: rgb(255, 255, 255);
    font-size: 24px;
}

#login-input{
    width: 60%;
    padding-top: 8px;
    padding-bottom: 8px;
    text-align: center;
    outline: none;
    font-size: 19px;
}

#forma{
    
    height: 200px;
    width: auto;
   
}


#lista{
    color: white;
    font-size: 18px;
    padding-right: 4%;
}

#color{
    list-style: none;
}

.form-check-label{
    cursor: pointer;
}


#registro{
    text-decoration: none;
    padding: 8px 15px ;
    background-color: rgb(0, 0, 0);
    color: white;
}





/*      media        */ 



@media (max-width: 700px) {
    #fondo {
      margin-top: 25%;
    }
    #boton{
        width: 35px;
        height: 35px;
        margin-top: 4%;
        margin-left: 7%;
    }
  }

</style>

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

    
    <a href="{{ url('/vista')}}"><span> <img src="/sistema/resources/css/flecha-izquierda.png" id="boton"></span> </a>
    


<div class="container" id="contenido">



    <h3>Radios {{ $formato->tipo}}</h3>
   
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
        <input type="text" class="form-control" value="{{$formatito-> Tierras}}" disabled name="Tierras">
      </div>
      <div class="col">
        <label for="" class="form-label">Tiempo de Respaldo</label>
        <input type="text" class="form-control" value="{{$formatito-> Respaldo}}" disabled name="Respaldo">
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
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Antena}}" disabled name="Antena"></td>
            <td><input value="{{$formatito-> tabla1}}" disabled id="cuadro" name="tabla1"></input></td>
          </tr>
          <tr>
            <td>Cable de Antena</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Cable}}" disabled name="Cable"></td>
            <td><input value="{{$formatito-> tabla2}}" disabled id="cuadro" name="tabla2"></input></td>
          </tr>
          <tr>
            <td>Conectores</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Conectores}}" disabled name="Conectores"></td>
            <td><input value="{{$formatito-> tabla3}}" disabled id="cuadro" name="tabla3"></input></td>
          </tr>
          <tr>
            <td>Bocina</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito->Bocina }}" disabled name="Bocina"></td>
            <td><input value="{{$formatito-> tabla4}}" disabled id="cuadro" name="tabla4"></input></td>
          </tr>
          <tr>
            <td>Cable de Control</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Control}}" disabled name="Control"></td>
            <td><input value="{{$formato-> tabla5}}" disabled disabled id="cuadro" name="tabla5"></input></td>
          </tr>
          <tr>
            <td>Cabeza de Control</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Cabeza}}" disabled name="Cabeza"></td>
            <td><input value="{{$formatito-> tabla6}}" disabled id="cuadro" name="tabla6"></input></td>
          </tr>
          <tr>
            <td>Terminal (BAT)</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito->Terminal }}" disabled name="Terminal"></td>
            <td><input value="{{$formatito-> tabla7}}" disabled id="cuadro" name="tabla7"></input></td>
          </tr>
          <tr>
            <td>Cableado de VCD</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito->Cableado }}" disabled name="Cableado"></td>
            <td><input value="{{$formatito-> tabla8}}" disabled id="cuadro" name="tabla8"></input></td>
          </tr>
          <tr>
            <td>Fusible (RX-TX)</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Fusible}}" disabled name="Fusible"></td>
            <td><input value="{{$formatito-> tabla9}}" disabled id="cuadro" name="tabla9"></input></td>
          </tr>
          <tr>
            <td>Portafusible</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Portafusible}}" disabled name="Portafusible"></td>
            <td><input value="{{$formatito-> tabla10}}" disabled id="cuadro" name="tabla10"></input></td>
          </tr>
          <tr>
            <td>Terminal (B-)</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Terminalb}}" disabled name="Terminalb"></td>
            <td><input value="{{$formatito-> tabla11}}" disabled id="cuadro" name="tabla11"></input></td>
          </tr>
          <tr>
            <td>Cargador BAT</td>
            <!--ByJesusHilarioJuarezOrtiz-->
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Cargadorbat}}" disabled name="Cargadorbat"></td>
            <td><input value="{{$formatito-> tabla12}}" disabled id="cuadro" name="tabla12"></input></td>
          </tr>
          <tr>
            <td>Limpieza GRAL</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Limpieza}}" disabled name="Limpieza"></td>
            <td><input value="{{$formatito-> tabla13}}" disabled id="cuadro" name="tabla13"></input></td>
          </tr>
          <tr>
            <td>Bateria Movil</td>
            <td id="tabla"><input type="text" class="form-control" value="{{$formatito-> Bateria}}" disabled name="Bateria"></td>
            <td><input value="{{$formatito-> tabla14}}" disabled id="cuadro" name="tabla14"></input></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>

 


    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Observaciones: </label>
          <textarea class="form-control" rows="3" name="textarea" disabled>{{$formatito-> textarea}}</textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Inspecciono: </span>
          <input type="text" class="form-control" aria-label="" name="inspecciono" value="{{$formatito-> inspecciono}}" disabled>
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text">R.P.E</span>
          <input type="text" class="form-control" aria-label="RPE" name="rpe" value="{{ $formatito-> rpe }}" disabled>
          <span class="input-group-text">Firma</span>
          <input type="text" class="form-control" value=" {{ Auth::user()->name }}" aria-label="Username" disabled>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Historial del equipo: </label>
          <textarea class="form-control" rows="3" name="textoarea" value="{{$formatito-> textoarea}}" disabled>{{$formato-> textoarea}}</textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Vo. Bo.</span>
          <input type="text" class="form-control" rows="3" value="{{$formatito-> usuario}}" disabled aria-label="Usuario" name="usuario">
        </div>
      </div>
    </div>

    <div class="row">
      <h5>*** Si no hay evidencia fotografica, No se mostraran fotos ***</h5>
        <div class="col" id="medio">
        <img src="{{ asset('storage').'/'.$formato->Foto }}" id="forma">
        </div>
        <div class="col" id="medio">
        <img src="{{ asset('storage').'/'.$formato->Fotodos }}" id="forma">
        </div>
        <div class="col" id="medio">
        <img src="{{ asset('storage').'/'.$formato->Fototres }}" id="forma" >
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


</div>
  <!--ByJesusHilarioJuarezOrtiz-->