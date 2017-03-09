<?php
    include ('formato/cabecera_admin.php');
?>
<?php
    ob_start();
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
                                    echo "<textarea rows='5' class='form-control' name='sinopsis' required>.$obj->SINOPSIS.</textarea>";
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
                                    echo "<input type='number' class='form-control' name='precio' maxlength='2' value='$obj->PRECIO' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='fecha'>FECHA PUBLICACIÓN</label>";
                                    echo "<input type='date' class='form-control' name='fecha' value='$obj->FECHA_LANZA' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id_gen'>ID_GEN</label>";
                                    echo "<input type='text' class='form-control' name='id_gen' value='$obj->ID_GEN' required readonly>";
                        echo "</div>";

                        echo "<input type='submit' value='Actualizar'>";
                        echo "<input type='reset' value='Borrar'>";

                        echo "</form></center>";  


                        } //Cierre del  result de la consulta 
                   
                    
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



