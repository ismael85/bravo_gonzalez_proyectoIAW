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
                include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
            
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT * FROM LIBROS WHERE ID_GEN='".$_GET['ID']."' ORDER BY TITULO" ;
          if ($result = $connection->query($query)) {
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
                echo "<div class='col-md-4'>";
                 echo "<form class='navbar-form navbar-right' role='form'>";
                    echo "<h4><b><a href='detalle_producto.php?isbn=".$obj->ISBN."'>";
                        $titulo = $obj->TITULO;//Metes en una variable el obj titulo
                        if(strlen($titulo) > 18)//Si el numero de caracteres es mayor 18 que sustituya los siguientes                                   caracteres por ...
                            echo substr($titulo,0 , 18)."...";
                        else
                                echo substr($titulo, 0 , 18);//Y sino deje los caracteres que correspondan
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
                    echo "<a href='comprar.php?isbn=".$obj->ISBN."'><input type='button' value='Comprar'/></a>";
                 echo "</form>";
                echo "</div>";
          }//Cierre while
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
