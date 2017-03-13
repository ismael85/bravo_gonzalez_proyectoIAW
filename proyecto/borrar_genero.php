<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <div class="row"> 
            <?php
            if (isset($_GET['id'])) {
                include ('conexion_bd/conexion.php');//Conexión a la bd
                //Transformamos el array recibido en un único numero, que será el IdReparacion
                $id = $_GET['id'];
                  //Comprobamos que la reparacion existe.
                  if ($result = $connection->query("SELECT * FROM genero WHERE ID_GEN='".$_GET['id']."';")) {
                    if ($result2 = $connection->query("DELETE FROM libros WHERE ID_GEN='".$_GET['id']."';")) {
                      if ($result2 = $connection->query("DELETE FROM genero WHERE ID_GEN='".$_GET['id']."';")) {
                          echo "El genero $id ha sido borrado.<br>";
                        } else {
                            mysqli_error($connection);
                      }
                    } else {
                      }
                          mysqli_error($connection);
                       }
                        mysqli_error($connection);
                }
                 //boton para volver a la página anterior.
                  echo "<br><form action='dist_genero.php'>
                        <input type='submit' value='Volver' />
                        </form>";
         ?>
          </div>
    </div>
</div>