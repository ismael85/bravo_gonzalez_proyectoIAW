<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <?php
          
        if (isset($_GET['isbn'])) {
          include ('conexion_bd/conexion.php');//Conexión a la bd
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT * FROM libros WHERE ISBN='".$_GET['isbn']."'";
          if ($result = $connection->query($query)) {
              //FETCHING OBJECTS FROM THE RESULT SET
              //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
              while($obj = $result->fetch_object()) {
                  //PRINTING EACH ROW
                    echo "<div class='col-md-4'>";
                     echo "<form method='post' class='navbar-form navbar-right' role='form'>";
                        echo "<h4><b>$obj->TITULO</b></h4>";
                        echo "<p>Autor: $obj->AUTOR</p>";
                        echo "<p>Editorial: $obj->EDITORIAL</p>";
                        echo "<img src='".$obj->IMG."' width='250px' height='250px'>";
                        echo "<p>Sinopsis: $obj->SINOPSIS</p>";
                        echo "<p>Precio: $obj->PRECIO €</p>";
                        echo "<a href='comprar.php'><input type='button' name='' value='Comprar'/></a>";
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
