<?php
  session_start();
?> 
  <?php
    //FORM SUBMITTED
        if (isset($_POST["user"])) {
          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "admin", "12345", "proyecto");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from usuarios where nom_usu='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";
          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result = $connection->query($consulta)) {
              //No rows returned
              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                $obj =$result->fetch_object ();
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["nom_usu"]=$_POST["user"];
                $_SESSION["tipo_usu"]=$obj->tipo;
                $_SESSION["language"]="es";
                header("Location:validar.php");
              }
          } 
      }
        if (isset($_SESSION["nom_usu"]) && $_SESSION["tipo_usu"]=="A") {
             header ("Location: administrator.php");
         }else {
                header ("Location: index.php");
         }    
     
    ?>   
 
 
