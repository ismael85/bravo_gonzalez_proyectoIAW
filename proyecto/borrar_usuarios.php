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
                  if ($result = $connection->query("SELECT * FROM usuarios WHERE NOM_USU='".$_GET['id']."';")) {
                    if ($result2 = $connection->query("DELETE FROM pedidos WHERE NOM_USU='".$_GET['id']."';")) {
                      if ($result2 = $connection->query("DELETE FROM usuarios WHERE NOM_USU='".$_GET['id']."';")) {
                          echo "El usuario $id ha sido borrado.<br>";
                        } else {
                            mysqli_error($connection);
                      }
                    } else {
                      }
                          mysqli_error($connection);
                       }
                        mysqli_error($connection);
                }
                 //boton para volver a la página principal.
                  echo "<br><form action='usuarios.php'>
                        <input type='submit' value='Volver' />
                        </form>";
         ?>
          </div>
    </div>
</div>