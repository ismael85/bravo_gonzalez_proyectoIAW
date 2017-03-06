
<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container"><!--Todo el contenido de la tabla esta dentro de este contenedor--> 
        <div class="row">           
            <?php
               include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
                $query="SELECT * FROM DETALLE_PEDIDOS ORDER BY ID_PEDIDOS";
                    if ($result = $connection->query($query)) {
            ?>
            <h2><b>DETALLE_PEDIDOS</b></h2>
             <table class="table" border="3px solid black">
                <thead>
                <tr class="info">
                    
                    <th>ISBN</th>
                    <th>ID_PEDIDOS</th>
                    <th>CANTIDAD</th>
                    <th>Editar</th>
                    
                </tr>
                </thead>
            <?php
                  //Hacemos un bucle para saque todos los datos de la consulta
                  while($obj = $result->fetch_object()) {
                    echo "<div class='col-md-4'>";
                       echo "<tr class='info'>";
                        echo "<td>".$obj->ISBN."</td>";
                        echo "<td>".$obj->ID_PEDIDOS."</td>";
                        echo "<td>".$obj->CANTIDAD."</td>";
                        echo "<td><form method='get'><a href='editar_detalle.php?id=$obj->ISBN'><img src='./img/editar.jpg' width=50px heigh=50px;/></td>";
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
