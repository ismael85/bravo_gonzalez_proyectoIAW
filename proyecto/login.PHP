<?php
  session_start();
?>
<?php
    include ('formato/cabecera_login.php');
?>
        <?php
        //FORM SUBMITTED
        if (isset($_POST["user"])) {
                include ('conexion_bd/conexion.php');//Introduce el contenido de esta pagina en index.php
            
          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from USUARIOS where NOM_USU='".$_POST["user"]."' and PASSWORD=md5('".$_POST["password"]."');";
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
                $_SESSION["tipo_usu"]=$obj->TIPO_USU;
                $_SESSION["language"]="es";
               
                 
                if ($_SESSION["tipo_usu"]=="A") {//Si inicia sesión como un usuario tipo A que se vaya a administrator.php                    
                    header ("Location: administrator.php");
                }else {                    
                    header ("Location: index.php");//Sino que se dirija al index.php
                }     
            }
             
          } 
        }
      ?>   
        <center><form role="form" action="login.php" method="post">
          <div class="form-group">
            <label><h2>Login de usuario</h2></label>
            <p><b>Usuario: <input type="user" class="form-control" name="user" 
                               placeholder="Introduzca su usuario"/></b></p>
          </div>
          <div class="form-group">    
            <p><b>Password: <input type="password" class="form-control" name="password" 
                                placeholder="Introduzca su contraseña"></b></p>
          </div>
            <button type="submit" class="btn btn-default" onClick="location.href='index.php'">Enviar</button>
            <button type="reset" class="btn btn-default">Borrar</button>
        </form></center>




