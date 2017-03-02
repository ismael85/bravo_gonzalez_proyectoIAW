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
 
       
        </div>          
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <?php
              if (!isset($_SESSION["nom_usu"])) {//Si no a iniciado sesión ningún usuario que aparezca el botón registrate
                  echo "<a href='index.php'><input type='button' value='INICIO'/></a>"; 
                  echo "<a href='registre.php'><input type='button' value='REGISTRATE'/></a>";          
               }                                                                 
            
            ?>  
              
           </form>
        </div>
        </div><!--/.navbar-collapse -->
      
    </nav>
        
        
             
  