
<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container"><!--Todo el contenido de la tabla esta dentro de este contenedor--> 
        <div class="row">           
            <?php
               include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
                $query="SELECT * FROM GENERO ORDER BY NOM_GEN";
                    if ($result = $connection->query($query)) {
            ?>
             <h2><b>GÉNEROS</b></h2><form action='registre_genero.php'>
            <input type='submit' value='Añadir género' /></form>
             <table class="table" border="3px solid black">
                <thead>
                <tr class="info">
                    
                    <th>ID</th>
                    <th>NOMBRE GÉNERO</th>
                    <th>BORRAR</th>
                </tr>
                </thead>
            <?php
                  //Hacemos un bucle para saque todos los datos de la consulta
                  while($obj = $result->fetch_object()) {
                    echo "<div class='col-md-4'>";
                       echo "<tr class='info'>";
                        
                        echo "<td>".$obj->ID_GEN."</td>";
                        echo "<td>".$obj->NOM_GEN."</td>";
                        echo "<td><form method='get'><a href='borrar_genero.php?id=$obj->ID_GEN'><img src='./img/borrar.jpg' width=50px heigh=50px;/></td>";
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
