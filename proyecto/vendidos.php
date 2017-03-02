<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
             <center><h3><b>LOS 10 MÁS VENDIDOS</b></h3></center>
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
            $query="SELECT ISBN, SUM(CANTIDAD), TITULO, AUTOR,IMG, PRECIO FROM DETALLE_PEDIDOS JOIN LIBROS USING (ISBN) GROUP BY ISBN ORDER BY SUM(CANTIDAD) DESC LIMIT 10"; 

          if ($result = $connection->query($query)) {

        ?>
           
        <?php
              
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
            echo "<div class='col-md-4'>";
             echo "<form class='navbar-form navbar-right' role='form'>";
                echo "<h4><b><a href='detalle_producto.php?isbn=".$obj->ISBN."'>";
                    $titulo = $obj->TITULO;
                        if(strlen($titulo) > 18)
                            echo substr($titulo,0 , 18)."...";
                        else
                                echo substr($titulo, 0 , 18);
                echo "</a></b></h4>";
                    $escritor = $obj->AUTOR;
                echo "<p>";
                    if(strlen($escritor) > 18)
                            echo substr($escritor,0 , 18)."...";
                        else
                                echo substr($escritor, 0 , 18);
                echo "</p>";
                echo "<img src='".$obj->IMG."' width='250px' height='250px'>";
                echo "<p>$obj->PRECIO €</p>";
                echo "<a href='carrito.php'><input type='button' value='Añadir al carrito'/></a>";
              echo "</form>";
            echo "</div>";
               
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
          } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
        ?>
     </div>
    </div>
   </div>

 