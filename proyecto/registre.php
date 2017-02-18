
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <?php
		if (!isset($_POST["usu"])) : ?>
        <form method="post">
          <fieldset>
            <legend>REGISTRO DE USUARIO</legend>
            <span>Nombre de usuario: </span><input type="text" name="usu" required><br>
            <span>Password: </span><input type="text" name="pass" required><br>
            <span>Nombre: </span><input type="text" name="name" required><br>
            <span>Apellidos: </span><input type="text" name="apell" required><br>
            <span>Direccion: </span><input type="text" name="dire" required><br>
            <span>C.P: </span><input type="number" name="cp" required><br>
            <span>Localidad: </span><input type="text" name="loca" required><br>
            <span>Provincia: </span><input type="text" name="provi" required><br>
            <span>TLF: </span><input type="number" name="tlf" required><br>
            <span>Email: </span><input type="text" name="email" required><br>
            <span><input type="submit" value="Registrar" ><span><input type="reset" value="Borrar" >            
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
        $insert="INSERT INTO usuarios VALUES ('".$_POST['usu']."',md5('".$_POST['pass']."'),'".$_POST['name']."','".$_POST['apell']."','".$_POST['dire']."','".$_POST['cp']."','".$_POST['loca']."','".$_POST['provi']."','".$_POST['tlf']."','".$_POST['email']."','C')";

   
     $result = $connection->query($insert);
  	        if (!$result) {
   		         echo "Query Error";
            } else {
              echo "Nuevo usuario añadido";
            }
    
        ?>
       <?php endif ?> 
<?php
    include ('formato/pie.php');
?>  