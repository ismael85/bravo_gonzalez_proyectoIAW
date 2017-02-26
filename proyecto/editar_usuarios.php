<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        
        <?php

        if (isset($_GET['id'])) {
            //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "admin", "12345", "proyecto");
          $connection->set_charset("uft8");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          /* Consultas de selección que devuelven un conjunto de resultados */
            $query="SELECT * FROM USUARIOS WHERE NOM_USU='".$_GET['ID']."'";
                if ($result = $connection->query($query)) {
                    $obj = $result->fetch_object();
                    $id =$obj->NOM_USU;
                    $name = $obj->NOMBRE;
                    $apellidos = $obj->APELLIDOS;
                    $direccion = $obj->DIRECCION;
                    $cp = $obj->CP;
                    $localidad = $obj->LOCALIDAD;
                    $provincia = $obj->PROVINCIA;
                    $tlf = $obj->TLF;
                    $email = $obj->EMAIL;
                    $tipo = $obj->TIPO_USU;
                }
             ?>
            <form method="post">
            <fieldset>
            <legend>Datos del usuario</legend>
                <p><b>Usuario: <input type="hidden" name="id" value="<?php echo $id; ?>"required></b></p><br>
                <p><b>Nombre: <input type="text" name="nom" value="<?php echo $name; ?>" required></b></p><br>
                <p><b>Apellidos: <input type="text" name="apell" required value="<?php echo $apellidos; ?>"></b></p><br>
                <p><b>Direccion:<input type="text" name="dire" value="<?php echo $direccion; ?>"></b></p><br>
                <p><b>Cp: <input type="number" name="cp" value="<?php echo $cp; ?>"></b></p><br>
                <p><b>Localidad: <input type="text" name="loca" value="<?php echo $localidad; ?>"></b></p><br>
                <p><b>Provincia: <input type="text" name="provi" value="<?php echo $provincia; ?>"></b></p><br>
                <p><b>Teléfono: <input type="number" name="tlf" value="<?php echo $tlf; ?>"></b></p><br>
                <p><b>Email: <input type="text" name="mail" value="<?php echo $cp; ?>"></b></p><br>
                <p><b>Tipo usuario: <input type="hidden" name="tipo" value="<?php echo $tipo; ?>"></b></p><br>
            
                <input type="submit" value="Editar">
            </fieldset>
            </form>
        <?php else: ?>

        <?php
        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "admin", "12345", "proyecto");
        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }
        //MAKING A UPDATE
        $codigo=$_POST['codigo'];
        $nombre=$_POST['name'];
        $apellidos=$_POST['lastname'];
        $direccion=$_POST['address'];
        $telefono=$_POST['phone'];
        $dni=$_POST['dni'];
        $query="Update clientes SET nombre='$nombre',
        apellidos='$apellidos',
        direccion='$direccion',
        telefono='$telefono',
        dni='$dni'
        WHERE codcliente='$codigo'";
        $result = $connection->query($query);
        if (!$result) {
            echo "WRONG QUERY";
        }
        ?>

      <?php endif ?>

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
              //Free the result. Avoid High Memory Usages
              $result->close();
              unset($obj);
              unset($connection);
                    } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
            
            ?>
             
    
  </div><!--Cierre del contenedor-->
</div><!--Cierre del class jumbotron-->



