<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          
         
        <div class="row">
        
                 
           <?php
      //CREATING THE CONNECTION
    if (isset($_GET['ID'])) {
      $connection = new mysqli("localhost", "admin", "12345", "proyecto");
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT * FROM libros WHERE ID_GEN='".$_GET['ID']."' ORDER BY TITULO" ;
        
        
      if ($result = $connection->query($query)) {
          
          
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              
                 echo "<div class='col-md-4'>";
                echo "<form class='navbar-form navbar-right' role='form'>";
                
                echo "<h4><b><a href='detalle_producto.php?isbn=".$obj->ISBN."'>$obj->TITULO</a></b></h4>";   
                echo "<p>$obj->AUTOR</p>";
                echo "<img src='".$obj->IMG."' width='250px' height='250px'>";
                echo "<p>$obj->PRECIO €</p>";
              
              
              echo "<input type='button' value='Añadir al carrito' onClick='location.href='carrito.php'/>";
              
              echo "</form>";
              
                echo "</div>";
               
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } else {
       echo "INVALID QUERY";
          }


        } else {
          
          echo "PRODUCTO NO SELECCIONADO";
        }

    ?>
        </div>
          <!--Cierre class row-->
    </div>
        <!--Cierre class container-->

   </div><!--Cierre class jumbotron-->
