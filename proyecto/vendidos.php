<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
             <center><h3><b>LOS 10 MÁS VENDIDOS</b></h3></center>
       
            
        
        <?php
          include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT ISBN, SUM(CANTIDAD), TITULO, AUTOR,IMG, PRECIO FROM detalle_pedidos JOIN libros USING (ISBN) GROUP BY ISBN ORDER BY SUM(CANTIDAD) DESC LIMIT 5"; 

          if ($result = $connection->query($query)) {

        ?>
           
        <?php
              
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
            echo "<div class='col-md-4'>";
             echo "<form class='navbar-form navbar-right' role='form'>";
                echo "<h4><b><a href='detalle_producto.php?isbn=".$obj->ISBN."'>";
                    $titulo = $obj->TITULO;//Añado el objeto titulo a una variable
                        if(strlen($titulo) > 18)//Si el tamaño de esa variable es mayor de 18 que haga la siguiente                             linea
                            echo substr($titulo,0 , 18)."...";//Sustituye los caracteres por ...
                        else
                                echo substr($titulo, 0 , 18);//Sino supera 18 caracteres que me los saque por                                       pantalla
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

 