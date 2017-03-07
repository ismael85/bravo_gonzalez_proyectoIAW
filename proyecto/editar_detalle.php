<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <div class="row">  
            <?php

               if (isset($_GET['id'])) {

                include ('conexion_bd/conexion.php');


                        if ($result = $connection->query("SELECT * FROM USUARIOS WHERE NOM_USU='".$_GET['id']."';")) { 



                         $obj = $result->fetch_object();

                        echo "<center><form role='form' method='post' enctype='multipart/form-data'>";

                        echo "<legend>Rellene para editar este usuario:</legend>";
                        echo "<div class='form-group'>";
                                    echo "<label for='id'>USUARIO</label>";
                                    echo "<input type='text' class='form-control' name='id' value='$obj->NOM_USU' required readonly>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='password'>PASSWORD</label>";
                                    echo "<input type='text' class='form-control' name='password' value='$obj->PASSWORD' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='nombre'>NOMBRE</label>";
                                    echo "<input type='text' class='form-control' name='nombre' value='$obj->NOMBRE' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='apellidos'>APELLIDOS</label>";
                                    echo "<input type='text' class='form-control' name='apellidos' value='$obj->APELLIDOS' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='direccion'>DIRECCIÓN</label>";
                                    echo "<input type='text' class='form-control' name='direccion' value='$obj->DIRECCION' required>";
                        echo "</div>";    
                        echo "<div class='form-group'>";
                                    echo "<label for='cp'>CP</label>";
                                    echo "<input type='number' class='form-control' name='cp' maxlength='5' value='$obj->COD_POSTAL' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='loca'>LOCALIDAD</label>";
                                    echo "<input type='text' class='form-control' name='loca' value='$obj->LOCALIDAD' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='provi'>PROVINCIA</label>";
                                    echo "<input type='text' class='form-control' name='provi' value='$obj->PROVINCIA' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='tlf'>TLF</label>";
                                    echo "<input type='tel' class='form-control' name='tlf' maxlength='9' value='$obj->TLF' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='mail'>EMAIL</label>";
                                    echo "<input type='email' class='form-control' name='mail' value='$obj->EMAIL' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                                    echo "<label for='tipo'>TIPO</label>";
                                    echo "<input type='text' class='form-control' name='tipo' value='$obj->TIPO_USU' required readonly>";
                        echo "</div>";

                          echo "<input type='submit' value='Actualizar'>";
                          echo "<input type='reset' value='Borrar'>";

                    echo "</form></center>";  


                        } //Cierre del  result de la consulta 


                    } //Cierre $_GET
                    if (isset($_POST['id'])) {

                    //variables
                    $id=$_POST['id'];
                    $pass=$_POST['password'];
                    $nombre=$_POST['nombre'];
                    $apellidos=$_POST['apellidos'];
                    $direccion=$_POST['direccion'];
                    $cp=$_POST['cp'];
                    $localidad=$_POST['loca'];
                    $provincia=$_POST['provi'];
                    $tlf=$_POST['tlf'];
                    $email=$_POST['mail'];
                    $tipo=$_POST['tipo'];

                    //consulta
                    $consulta="UPDATE USUARIOS SET
                    `NOM_USU` =  '$id',
                    `PASSWORD` =  md5('$pass'),
                    `NOMBRE` =  '$nombre',
                    `APELLIDOS` = '$apellidos',
                    `DIRECCION` =  '$direccion',
                    `COD_POSTAL` = '$cp',
                    `LOCALIDAD` =  '$localidad',
                    `PROVINCIA` =  '$provincia',
                    `TLF` =  '$tlf',
                    `EMAIL` =  '$email',
                    `TIPO_USU` =  '$tipo'
                    WHERE  `NOM_USU` ='".$_GET["id"]."'";


                    if ($result = $connection->query($consulta)) {

                      header ("Location: usuarios.php");
                    } else {

                          echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }//Cierre del else
                  }//Cierre del $_POST

                    ?>
    </div><!--Cierre del row-->
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->

