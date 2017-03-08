<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <div class="row">  
            <?php

               if (isset($_GET['id'])) {

                include ('conexion_bd/conexion.php');


                        if ($result = $connection->query("SELECT * FROM PEDIDOS JOIN DETALLE_PEDIDOS USING (ID_PEDIDOS) WHERE ID_PEDIDOS='".$_GET['id']."';")) { 



                         $obj = $result->fetch_object();

                        echo "<center><form role='form' method='post' enctype='multipart/form-data'>";

                        echo "<legend>Rellene para editar este pedido:</legend>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id'>ID_PEDIDOS</label>";
                                    echo "<input type='text' class='form-control' name='id' value='$obj->ID_PEDIDOS' required readonly>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='isbn'>ISBN</label>";
                                    echo "<input type='text' class='form-control' name='isbn' value='$obj->ISBN' required readonly>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='cantidad'>CANTIDAD</label>";
                                    echo "<input type='number' class='form-control' name='cantidad' value='$obj->CANTIDAD' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='fechaped'>FECHA_PEDIDO</label>";
                                    echo "<input type='date' class='form-control' name='fechaped' value='$obj->FECH_PED' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='usuario'>USUARIO</label>";
                                    echo "<input type='text' class='form-control' name='usuario' value='$obj->NOM_USU' required readonly>";
                        echo "</div>";
                        

                          echo "<input type='submit' value='Actualizar'>";
                          echo "<input type='reset' value='Borrar'>";

                    echo "</form></center>";  


                        } //Cierre del  result de la consulta 


                    } //Cierre $_GET
                      if (isset($_POST['id'])) {

                    //variables
                    $id=$_POST['id'];
                    $isbn=$_POST['isbn'];
                    $cantidad=$_POST['cantidad'];
                    $fped=$_POST['fechaped'];
                    $usuario=$_POST['usuario'];
                    

                    //consulta
                    $consulta="UPDATE PEDIDOS SET
                    `ID_PEDIDOS` =  '$id',
                    `FECH_PED` =  '$fped',
                    `NOM_USU` = '$usuario'
                    WHERE `ID_PEDIDOS` ='".$_GET["id"]."'";
                    $consulta2="UPDATE DETALLE_PEDIDOS SET
                    `ISBN` =  '$isbn', 
                    `ID_PEDIDOS` =  '$id',
                    `CANTIDAD` =  '$cantidad'
                    WHERE `ID_PEDIDOS` ='".$_GET["id"]."'";
                                        
                   

                          

                    if ($result = $connection->query($consulta)) {
                        if ($result2 = $connection->query($consulta2)) {
                            header ("Location: pedidos.php");
                    } else {
                            mysqli_error($connection);
                      }
                    } else {
                      }
                          mysqli_error($connection);
                      }

            ?>

    </div><!--Cierre del row-->
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->



