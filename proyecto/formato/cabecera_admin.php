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
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-brand" role="form">
            
            <input type="button" value="GÉNEROS"  onClick="location.href='dist_genero.php'"/>
            <input type="button" value="USUARIOS"  onClick="location.href='usuarios.php'"/>
            <input type="button" value="PEDIDOS"  onClick="location.href='pedidos.php'"/>
            <input type="button" value="LIBROS"  onClick="location.href='libros.php'"/>  
          </form>
        </div><!--/.navbar-collapse -->
        
        </div>          
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <?php
              
                if ($_SESSION["tipo_usu"]=="A") {//Si a iniciado sesión como un usuario tipo administrador que le aparezca un                                   saludo y el botón de desconectar
                  echo "<input type='button' value='Hola Administrador'/>";
                   echo "<a href='cerrar_session.php'><input type='button' value='DESCONECTAR'/></a>";
               }                                                                 
               else {//Si es un usuario que no es tipo no le deje entrar en zona admninistrador y le mande a index.php 
                   
                    header ("Location: index.php");
               }
            ?>  
              
           </form>
        </div>
        </div><!--/.navbar-collapse -->
      
    </nav>
    </body>
</html>