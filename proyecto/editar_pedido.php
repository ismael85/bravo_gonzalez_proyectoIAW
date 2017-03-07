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
                                    echo "<label for='fechaped'>FECHA_PEDIDO</label>";
                                    echo "<input type='date' class='form-control' name='fechaped' value='$obj->FECH_PED' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='fechaent'>FECHA_ENTREGA</label>";
                                    echo "<input type='date' class='form-control' name='fechaent' value='$obj->FECH_ENTR' required>";
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
                    $fped=$_POST['fechaped'];
                    $fent=$_POST['fechaent'];
                    $usuario=$_POST['usuario'];
                    

                    //consulta
                    $consulta="UPDATE PEDIDOS SET
                    `ID_PEDIDOS` =  '$id',
                    `FECH_PED` =  '$fped',
                    `FECH_ENTR` =  '$fent',
                    `NOM_USU` = '$usuario'
                    WHERE `ID_PEDIDOS` ='".$_GET["id"]."'";
                          

                    if ($result = $connection->query($consulta)) {

                      header ("Location: pedidos.php");
                    } else {

                          echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }//Cierre del else
                  }//Cierre del $_POST

                    ?>

    </div><!--Cierre del row-->
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->



