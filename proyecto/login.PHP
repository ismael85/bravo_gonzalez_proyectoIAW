<?php
  session_start();
?>
<?php
    include ('cabecera/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
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
          $consulta="select * from usuarios where
         nom_usu='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";
          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result = $connection->query($consulta)) {
              //No rows returned
              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["user"]=$_POST["user"];
                $_SESSION["language"]="es";
                header("Location: INDEX.PHP");
              }
          } else {
            echo "Wrong Query";
          }
      }
    ?>

    <form action="login.php" method="post">
    <legend>Usuario</legend>
      <p>Usuario:<input name="user" required></p>
      <p>Contraseña:<input name="password" type="password" required></p>
      <p><input type="submit" value="ENVIAR"></p>

    </form>

      </div>
    </div>

<?php
    include ('pie/pie.php');
?>  >

    


  </body>
</html>