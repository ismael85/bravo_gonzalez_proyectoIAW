<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <?php
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
            $query="SELECT * FROM genero ORDER BY NOM_GEN";
            if ($result = $connection->query($query)) {
        ?>
          <h1><p><b>ELIJA EL GÉNERO QUE QUIERE VISUALIZAR</b></p></h1>
          <ol>

        <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
                echo "<li><h4><a href='lista_genero.php?ID=".$obj->ID_GEN."'>$obj->NOM_GEN</a></h4></li>";    
          }
          echo "</ol>";
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
            }  //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
        ?>
    
     </div>
    </div>
   </div>

 