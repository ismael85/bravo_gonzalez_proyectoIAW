<?php
  session_start();
?>
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
       

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
       
    </head>
    <body>
        
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">LIBRERIA ONLINE BRAVO</a> 
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-brand" role="form">
            <input type="button" value="INICIO"  onClick="location.href='index.php'"/>
            <input type="button" value="LOS 10 MÁS VENDIDOS"  onClick="location.href='vendidos.php'"/>
            <input type="button" value="CATÁLOGO"  onClick="location.href='catalogo.php'"/>
            <input type="button" value="GÉNEROS"  onClick="location.href='genero.php'"/>       
          </form>
        </div><!--/.navbar-collapse -->
        </div>          
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <?php
              if (!isset($_SESSION["nom_usu"])) {//Si no a iniciado sesión ningún usuario que aparezca el botón iniciar sesión                                      y registrate
                  echo "<a href='login.php'><input type='button' value='INICIAR SESIÓN'/></a>";
                  echo "<a href='registre.php'><input type='button' value='REGISTRATE'/></a>";
               }                                                                 
               else {
                    echo "<input type='button' value='BIENVENID@ {$_SESSION['nom_usu']}'/>";
                   echo "<a href='cerrar_session.php'><input type='button' value='DESCONECTAR'/></a>";
               }
            ?>  
              
           </form>
        </div>
        </div><!--/.navbar-collapse -->
    </nav>
        
        
             
  