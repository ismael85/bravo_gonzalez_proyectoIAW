<?php
          
        if (isset($_GET['id'])) {
            
            //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "admin", "12345", "proyecto");
          $connection->set_charset("uft8");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT * FROM USUARIOS WHERE NOM_USU='".$_GET['id']."'";
          if ($result = $connection->query($query)) {
            $query="SELECT * FROM USUARIOS WHERE NOM_USU='".$_GET['id']."'";
            if ($result = $connection->query("DELETE FROM USUARIOS WHERE NOM_USU='".$_GET['id']."'")){
                echo "Usuario eliminado";
            }
            else {
                echo "INVALID QUERY";
              }
            } else {
              echo "Usuario no eliminado";
            }
        }
?>