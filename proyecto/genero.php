<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <?php
          include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT * FROM GENERO ORDER BY NOM_GEN";
            if ($result = $connection->query($query)) {
        ?>
          <h1><p><b>ELIJA EL GÉNERO QUE QUIERE VISUALIZAR</b></p></h1>
          

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

 