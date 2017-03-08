
<?php
    include ('formato/cabecera.php');
?>
    <div class="jumbotron">
      <div class="container">
        <div class="row">
            <center><h3><b>CATÁLOGO</b></h3></center>
        <?php
          include ('conexion_bd/conexion.php');
            /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT * FROM LIBROS ORDER BY TITULO";
          if ($result = $connection->query($query)) {
          
        ?>
        <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
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
                echo "<a href='comprar.php'><input type='button' value='Comprar'/></a>";
             echo "</form>";
            echo "</div>";
          }//Cierre del while
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
          } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
        ?>
        </div>
    </div>
   </div>

 