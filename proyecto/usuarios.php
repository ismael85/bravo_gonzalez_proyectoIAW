
<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <div class="row">
            
            <?php
               include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
                $query="SELECT * FROM USUARIOS WHERE TIPO_USU!='A' ORDER BY NOMBRE";
                    if ($result = $connection->query($query)) {
            ?>
            <h2><b>ADMINISTRAR USUARIOS</b></h2><form action='registre_admin.php'>
                        <input type='submit' value='Añadir administrador' /></form>
             <table class="table" border="3px solid black">
                <thead>
                <tr class="info">
                    <th>Nom_usu</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>CP</th>
                    <th>Localidad</th>
                    <th>Provincia</th>
                    <th>TLF</th>
                    <th>Email</th>
                    <th>Tipo_usu</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>
            <?php
                  //Hacemos un bucle para saque todos los datos de la consulta
                  while($obj = $result->fetch_object()) {
                    echo "<div class='col-md-4'>";
                       echo "<tr class='info'>";
                        echo "<td>".$obj->NOM_USU."</td>";
                        echo "<td>".$obj->NOMBRE."</td>";
                        echo "<td>".$obj->APELLIDOS."</td>";
                        echo "<td>".$obj->DIRECCION."</td>";
                        echo "<td>".$obj->COD_POSTAL."</td>";
                        echo "<td>".$obj->LOCALIDAD."</td>";
                        echo "<td>".$obj->PROVINCIA."</td>";
                        echo "<td>".$obj->TLF."</td>";
                        echo "<td>".$obj->EMAIL."</td>";
                        echo "<td>".$obj->TIPO_USU."</td>";
                        echo "<td><form method='get'><a href='editar_usuarios.php?id=$obj->NOM_USU'><img src='./img/editar.jpg' width=50px heigh=50px/></a></td>";
                        echo "<td><form method='get'><a href='borrar_usuarios.php?id=$obj->NOM_USU'><img src='./img/borrar.jpg' width=50px heigh=50px/></a></form></td>";
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
