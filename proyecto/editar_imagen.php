<?php
    include ('formato/cabecera_admin.php');
?>

<div class="jumbotron">
      <div class="container">
        <div class="row">  
            <?php

               if (isset($_GET['id'])) {

                include ('conexion_bd/conexion.php');


                        if ($result = $connection->query("SELECT * FROM LIBROS WHERE ISBN='".$_GET['id']."';")) { 



                         $obj = $result->fetch_object();

                        echo "<center><form role='form' method='post' enctype='multipart/form-data'>";
                        echo "<legend>Cambie la imagen del libro:</legend>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id'></label>";
                                    echo "<input type='hidden' class='form-control' name='id' value='$obj->ISBN' required readonly>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='imagen'>Adjuntar una imagen</label>";
                                    echo "<input type='file' class='form-control' name='imagen' value='$obj->IMG' required>";
                                    echo "<p class='help-block'>Selecciona una imagen de producto.</p>";
                        echo "</div>";
                        echo "<input type='submit' value='Actualizar'>";
                        echo "<input type='reset' value='Borrar'>";

                        echo "</form></center>";  


                        } //Cierre del  result de la consulta 
                   
                    
                    } //Cierre $_GET

                      if (isset($_POST['id'])) {

                   
                    
                     //Temp file. Where the uploaded file is stored temporary
                        $tmp_file = $_FILES['imagen']['tmp_name'];

                        //Dir where we are going to store the file
                        $target_dir = "img/";

                        //Full name of the file.
                        $target_file = strtolower($target_dir . basename($_FILES['imagen']['name']));

                        //Can we upload the file
                        $valid = true;

                        //Check if the file already exists
                        if (file_exists($target_file)) {
                            echo "Ya existe este archivo.";
                            $valid = false;
                        }

                        //Chequeamos que la imagen sea menor de 2MB
                        if($_FILES['imagen']['size'] > (2048000)) {
                            $valid = false;
                       echo 'El tamaño de la imagen es muy grande, solo se admite 2MB.';
                        }

                        //Chequeamos la extensión que va a tener nuestra imagen
                        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); // Nosotros se ponemos las                                                                      extensiones que solo se pueden usar.
                        if ($file_extension != "jpg" &&
                            $file_extension != "jpeg" &&
                            $file_extension != "png" &&
                            $file_extension != "gif") {
                            $valid = false;
                            echo "Solo se admiten las extensiones JPG,JPEG,PNG y GIF";
                        }

                        if ($valid) {
                            //Put the file in its place
                            move_uploaded_file($tmp_file, $target_file);
                        }
                  

                    //consulta
                    $consulta="UPDATE LIBROS SET
                    `IMG` =  '$target_file'
                    WHERE  `ISBN` ='".$_GET["id"]."'";


                    if ($result = $connection->query($consulta)) {

                      header ("Location: libros.php");
                    } else {

                          echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }//Cierre del else
                  }//Cierre del $_POST

                    ?>

    </div><!--Cierre del row-->
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->



