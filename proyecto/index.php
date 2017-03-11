
<?php
    include ('formato/cabecera.php');//Introduce el contenido de esta pagina en index.php
?>
    
    <div class="jumbotron">
      <div class="container"><!--Todo el contenido de la tabla esta dentro de este contenedor--> 
        <h2><b>Bienvenido a la librería online Bravo</b></h2>
        <p>En este lugar podrá encontrar multitud de libros que puede comprar. Continúamente añadimos novedades. Visítenos con frecuencia para sus compras.</p>
        <h2 align="center"><b>NOVEDADES</b></h2>  
        <div class="row">  
            
    
            <?php
              include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php 

                /* Consulta que devuelve los libros más nuevos desde comienzos de año */
                $query="SELECT * FROM LIBROS WHERE FECHA_LANZA > '2017-01-01'";
                    if ($result = $connection->query($query)) {
            ?>
            <?php
                  //Hacemos un bucle para saque todos los datos de la consulta
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
        </div><!--Cierre del class row-->
      </div><!--Cierre del contenedor-->
    </div><!--Cierre del class jumbotron-->


 