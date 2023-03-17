<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@vite(['../resources/css/login.css', 'resources/js/app.js'])
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../resources/css/avatar.png" id="icon" alt="User Icon" />
    </div>
    <div>
    <h3>Iniciar Sesión</h3>
    </div>


    <!-- Login Form -->
    <form action="{{ route('login')}}" method="post">
      @csrf
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario">

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

   

  </div>
</div>
