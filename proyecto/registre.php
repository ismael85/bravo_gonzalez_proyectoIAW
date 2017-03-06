<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
       
    </head>
    <body>
        
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">LIBRERIA ONLINE BRAVO</a> 
            
       
        </div> 
          <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
              <button type="button" class="btn btn-default" onClick='location.href="index.php"'>INICIO</button>
          </form>
          </div>
      </div>
    </nav>
        
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <?php
		if (!isset($_POST["usu"])) : ?>
         
        <center><form role="form" method="post" >
            <div class="form-group">
            <label><h2><b><u>Registro de usuario</u></b></h2></label>
            <p><b>Nombre de usuario: <input type="user" class="form-control" name="usu" 
                               placeholder="Introduzca su usuario" required/></b></p>
            </div>
            <div class="form-group">
            <p><b>Password: <input type="password" class="form-control" name="pass"  
                                placeholder="Introduzca su contraseña" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Nombre: <input type="text" class="form-control" name="name"  
                                placeholder="Introduzca su nombre" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Apellidos: <input type="text" class="form-control" name="apell"  
                                placeholder="Introduzca sus apellidos" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Dirección: <input type="text" class="form-control" name="dire"  
                                placeholder="Introduzca su dirección" required></b></p>
            </div>
            <div class="form-group">
            <p><b>CP: <input type="number" class="form-control" name="cp"   
                                placeholder="Introduzca su cp" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Localidad: <input type="text" class="form-control" name="loca"  
                                placeholder="Introduzca su localidad" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Provincia: <input type="text" class="form-control" name="provi"  
                                placeholder="Introduzca su provincia" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Telefono: <input type="number" class="form-control" name="tlf"  
                                placeholder="Introduzca su nº de teléfono" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Email: <input type="email" class="form-control" name="email"  
                                placeholder="Introduzca su email" required></b></p>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-default">Borrar</button>

        </form></center>
        <?php else: ?>
        <?php
            include ('conexion_bd/conexion.php');
        $insert="INSERT INTO USUARIOS VALUES ('".$_POST['usu']."',md5('".$_POST['pass']."'),'".$_POST['name']."','".$_POST['apell']."','".$_POST['dire']."','".$_POST['cp']."','".$_POST['loca']."','".$_POST['provi']."','".$_POST['tlf']."','".$_POST['email']."','C')";

   
        $result = $connection->query($insert);
  	        if (!$result) {
   		         echo "Datos existentes";
            } else {
              echo "Nuevo usuario añadido, ya puede iniciar sesión y comprar libros";
                
            }
    
        ?>
       <?php endif ?> 
