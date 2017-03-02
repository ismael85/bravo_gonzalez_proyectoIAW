
<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container"><!--Todo el contenido de la tabla esta dentro de este contenedor--> 
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
                $query="SELECT * FROM LIBROS ORDER BY AUTOR";
                    if ($result = $connection->query($query)) {
            ?>
            <h2><b>LIBROS</b></h2>
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
                        echo "<td><img src='./img/editar.jpg' width=50px heigh=50px;/></td>";
                        echo "<td><img src='./img/borrar.jpg' width=50px heigh=50px;/></td>";
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
