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

    
    <a href="{{ url('/personal')}}"><span> <img src="/sistema/resources/css/flecha-izquierda.png" id="boton"></span> </a>
    


<div class="container" id="contenido">

<h3>Editar Información de {{ $formato -> name}}</h3>

<div class="row">
    <div>
        <label for="" class="form-label">Marca:</label>
        <input type="text" name="marca" class="form-control" value="{{ $formato-> marca }}">
    </div>
</div>
<div class="row">
    <div>
        <label for="" class="form-label">Modelo:</label>
        <input type="text" name="modelo" class="form-control" value="{{ $formato-> modelo }}">
    </div>
</div>
<div class="row">
    <div>
        <label for="" class="form-label">Serie:</label>
        <input type="text" name="serie" class="form-control" value="{{ $formato-> serie}}">
    </div>
</div>

<button type="submit" class="btn btn-danger">Editar</button>

</div>