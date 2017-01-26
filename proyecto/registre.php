<?php
    include ('cabecera/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        
      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->



      <?php if (!isset($_POST["dni"])) : ?>

        <?php
          $dni =$_GET['id'];

        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "admin", "12345", "proyecto");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        //MAKING A SELECT QUERY
        /* Consultas de selección que devuelven un conjunto de resultados */
          $query="SELECT * FROM usuarios
            WHERE nom_usu='$dni'";

        if ($result = $connection->query($query)) {

            $obj = $result->fetch_object();

            $codigo =$obj->CodCliente;
            $name = $obj->Nombre;
            $apellidos = $obj->Apellidos;
            $direccion = $obj->Direccion;
            $telefono = $obj->Telefono;


        }



        ?>

        <form method="post">
          <fieldset>
            <legend>Personal Info</legend>
            <span>DNI:</span><input type="text" name="dni" value="<?php echo $dni; ?>"required><br>
            <span>Last Name:</span><input type="text" name="lastname" value="<?php echo $apellidos; ?>" required><br>
            <span>Name:</span><input type="text" name="name" required value="<?php echo $name; ?>"><br>
            <span>Address:</span><input type="text" name="address" value="<?php echo $direccion; ?>"><br>
            <span>Phone: </span><input type="text" name="phone" value="<?php echo $telefono; ?>"><br>
              <span><input type="hidden" name="codigo"  value="<?php echo $codigo; ?>"
            <span><input type="submit" value="Editar" >
          </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "tf", "12345", "tf");

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

  </body>
</html>
      </div>
    </div>

<?php
    include ('pie/pie.php');
?>  