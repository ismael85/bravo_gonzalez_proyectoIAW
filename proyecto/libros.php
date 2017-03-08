
<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container"><!--Todo el contenido de la tabla esta dentro de este contenedor--> 
        <div class="row">           
            <?php
               include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
                $query="SELECT * FROM LIBROS ORDER BY AUTOR";
                    if ($result = $connection->query($query)) {
            ?>
            <h2><b>ADMINISTRAR LIBROS</b></h2><form action='registre_libro.php'>
                        <input type='submit' value='Añadir libro' /></form>
             <table class="table" border="3px solid black">
                <thead>
                <tr class="info">
                    
                    <th>ISBN</th>
                    <th>TÍTULO</th>
                    <th>AUTOR</th>
                    <th>EDITORIAL</th>
                    <th>PRECIO</th>
                    <th>FECHA_LANZAMIENTO</th>
                    <th>GÉNERO</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>
            <?php
                  //Hacemos un bucle para saque todos los datos de la consulta
                  while($obj = $result->fetch_object()) {
                    echo "<div class='col-md-4'>";
                       echo "<tr class='info'>";
                        echo "<td>".$obj->ISBN."</td>";
                        echo "<td>".$obj->TITULO."</td>";
                        echo "<td>".$obj->AUTOR."</td>";
                        echo "<td>".$obj->EDITORIAL."</td>";
                        echo "<td>".$obj->PRECIO."</td>";
                        echo "<td>".$obj->FECHA_LANZA."</td>";
                        echo "<td>".$obj->ID_GEN."</td>";
                        echo "<td><form method='get'><a href='editar_libro.php?id=$obj->ISBN'><img src='./img/editar.jpg' width=50px heigh=50px;/></td>";
                        echo "<td><form method='get'><a href='borrar_libro.php?id=$obj->ISBN'><img src='./img/borrar.jpg' width=50px heigh=50px;/></td>";
                       echo "</tr>";
                    echo "</div>";

                  }
              //Free the result. Avoid High Memory Usages
              $result->close();
              unset($obj);
              unset($connection);
                    } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
            ?>
            </table>
    </div><!--Cierre del class row-->
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->
