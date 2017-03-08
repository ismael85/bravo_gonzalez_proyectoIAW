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

                        echo "<legend>Rellene para editar este libro:</legend>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id'>ISBN</label>";
                                    echo "<input type='text' class='form-control' name='id' value='$obj->ISBN' required readonly>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='titulo'>TITULO</label>";
                                    echo "<input type='text' class='form-control' name='titulo' value='$obj->TITULO' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='sinopsis'>SIPNOSIS</label>";
                                    echo "<input type='text' class='form-control' name='sinopsis' value='$obj->SINOPSIS' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='autor'>AUTOR</label>";
                                    echo "<input type='text' class='form-control' name='autor' value='$obj->AUTOR' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='editorial'>EDITORIAL</label>";
                                    echo "<input type='text' class='form-control' name='editorial' value='$obj->EDITORIAL' required>";
                        echo "</div>";    
                        echo "<div class='form-group'>";
                                    echo "<label for='precio'>PRECIO</label>";
                                    echo "<input type='number' class='form-control' name='precio' maxlength='3' value='$obj->PRECIO' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='fecha'>FECHA PUBLICACIÓN</label>";
                                    echo "<input type='date' class='form-control' name='fecha' value='$obj->FECHA_LANZA' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='imagen'>Adjuntar una imagen</label>";
                                    echo "<input type='file' class='form-control' name='imagen' value='$obj->IMG' required>";
                                    echo "<p class='help-block'>Selecciona una imagen de producto.</p>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id_gen'>ID_GEN</label>";
                                    echo "<input type='text' class='form-control' name='id_gen' value='$obj->ID_GEN' required readonly>";
                        echo "</div>";

                        echo "<input type='submit' value='Actualizar'>";
                        echo "<input type='reset' value='Borrar'>";

                        echo "</form></center>";  


                        } //Cierre del  result de la consulta 
                   
                     //Temp file. Where the uploaded file is stored temporary
                        $tmp_file = $_FILES['IMG']['tmp_name'];

                        //Dir where we are going to store the file
                        $target_dir = "img/";

                        //Full name of the file.
                        $target_file = strtolower($target_dir . basename($_FILES['IMG']['name']));

                        //Can we upload the file
                        $valid = true;

                        //Check if the file already exists
                        if (file_exists($target_file)) {
                            echo "Ya existe este archivo.";
                            $valid = false;
                        }

                        //Chequeamos que la imagen sea menor de 2MB
                        if($_FILES['IMG']['size'] > (2048000)) {
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
                    } //Cierre $_GET

                      if (isset($_POST['id'])) {

                    //variables
                    $id=$_POST['id'];
                    $titulo=$_POST['titulo'];
                    $sinopsis=$_POST['sinopsis'];
                    $autor=$_POST['autor'];
                    $editorial=$_POST['editorial'];
                    $precio=$_POST['precio'];
                    $fecha=$_POST['fecha'];
                    $imagen=$_POST['imagen'];
                    $id_gen=$_POST['id_gen'];
                  

                    //consulta
                    $consulta="UPDATE LIBROS SET
                    `ISBN` =  '$id',
                    `TITULO` =  '$titulo',
                    `SINOPSIS` =  '$sinopsis',
                    `AUTOR` = '$autor',
                    `EDITORIAL` =  '$editorial',
                    `PRECIO` = '$precio',
                    `FECHA_LANZA` =  '$fecha',
                    `IMG` =  '$target_file',
                    `ID_GEN` =  '$id_gen'
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



