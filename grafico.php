<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>

  <title>Smart Money</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<?php require_once "php/scripts.php";?>
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilosComunes.css">
  
</head>
<body class="fondo">
<nav class="navbar pb-1 pt-1 navbar-expand-lg navbar-dark bg-dark mb-2 text-center">
    <a href="Principal.php" class="navbar-brand text-white text-center mr-3 px-3">SmartMoney</a>
    <button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mr-auto">
      	<li class="nav-item active mx-5 px-3">
      		<a href="invertir.php" class="nav-link" style="font-size:18px;">Invertir</a>
        </li>
        <li class="nav-item active mx-5 px-3">
      		<a href="grafico.php" class="nav-link " style="font-size:18px;">Gráficos</a>
      	</li>
      	<li class="nav-item active" style="">
      		<a href="usuario.php" class="nav-link mx-5 px-3" style="font-size:18px;">Usuario</a>
      	</li>
      </ul>
      <div class="text-center">
        <li class="navbar-text">
          <a href="php/salir.php" style="font-size:18px;" class="nav-link">Cerrar sesión</a>
        </li>	
      </div>	
    </div>
</nav>
<div class="container-fluid">

  <div class="row">

    <div class="col-xl-3" id="laterales">
      <img src="img/lateralGrafico.jpg" class="img-fluid rounded" style="height:85vh" alt="">
    </div>

    <div class="col-xl-6">
      <h3 class="bg-primary text-center text-light">Setiembre: Dólar vs Euro</h3>
      <div id="grafica">
      </div>
    </div>

    <div class="col-xl-3" id="laterales">
      <img src="img/smartmoneyinfo.png" class="img-fluid rounded" style="height:85vh" alt="">
    </div>
  </div>
    
</div>
  <script src="funcionesJS/grafico.js"></script>
  </body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>