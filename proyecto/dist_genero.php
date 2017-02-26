
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
                $query="SELECT * FROM GENERO ORDER BY NOM_GEN";
                    if ($result = $connection->query($query)) {
            ?>
             <table class="table" border="3px solid black">
                <thead>
                <tr class="info">
                    
                    <th>ID</th>
                    <th>Nom_gen</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>
            <?php
                  //Hacemos un bucle para saque todos los datos de la consulta
                  while($obj = $result->fetch_object()) {
                    echo "<div class='col-md-4'>";
                       echo "<tr class='info'>";
                        
                        echo "<td>".$obj->ID_GEN."</td>";
                        echo "<td>".$obj->NOM_GEN."</td>";
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
