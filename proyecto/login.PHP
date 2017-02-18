<?php
  session_start();
?>
        <?php
        //FORM SUBMITTED
        if (isset($_POST["user"])) {
          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "admin", "12345", "proyecto");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from usuarios where nom_usu='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";
          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result = $connection->query($consulta)) {
              //No rows returned
              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO VUELVA A INICIAR SESIÓN";
              } else {
                $obj =$result->fetch_object ();
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["nom_usu"]=$_POST["user"];
                $_SESSION["tipo_usu"]=$obj->tipo;
                $_SESSION["language"]="es";
                header("Location:validar.php");
              }
             
          } 
        }
      ?>   
    <form action="login.php" method="post">
    <legend>Login de usuario</legend>
        <p>Usuario: <input name="user" required></p>
        <p>Contraseña: <input name="password" type="password" required></p>
        <p><input type="submit" value="ENVIAR"><input type="reset" value="BORRAR"></p>
        <input type="button" value="REGISTRATE" onClick='location.href="registre.php"'/>     

    </form>

  



