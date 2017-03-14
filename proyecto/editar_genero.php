<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <div class="row">  
            <?php

               if (isset($_GET['id'])) {

                include ('conexion_bd/conexion.php');


                        if ($result = $connection->query("SELECT * FROM genero WHERE ID_GEN='".$_GET['id']."';")) { 



                         $obj = $result->fetch_object();

                        echo "<center><form role='form' method='post' enctype='multipart/form-data'>";
                        echo "<legend>Rellene para editar este género:</legend>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id'>GÉNERO</label>";
                                    echo "<input type='text' class='form-control' name='id' value='$obj->ID_GEN' required readonly>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='genero'>PASSWORD</label>";
                                    echo "<input type='text' class='form-control' name='genero' value='$obj->NOM_GEN' required>";
                        echo "</div>";
                        echo "<input type='submit' value='Actualizar'>";
                        echo "<input type='reset' value='Borrar'>";
                        echo "</form></center>";  


                        } //Cierre del  result de la consulta 


                } //Cierre $_GET

                      if (isset($_POST['id'])) {

                    //variables
                    $id=$_POST['id'];
                    $genero=$_POST['genero'];
                    

                    //consulta
                    $consulta="UPDATE genero SET
                    `ID_GEN` =  '$id',
                    `NOM_GEN` =  '$genero'
                    WHERE  `ID_GEN` ='".$_GET["id"]."'";


                    if ($result = $connection->query($consulta)) {

                      header ("Location: dist_genero.php");
                    } else {
                          echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }//Cierre del else
                  }//Cierre del $_POST

            ?>

    </div><!--Cierre del row-->
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->

