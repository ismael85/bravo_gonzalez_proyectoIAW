<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <?php
		if (!isset($_POST["usu"])) : ?>
         
        <center><form role="form" method="post" >
            <div class="form-group">
            <label><h2><b><u>Registro de administrador</u></b></h2></label>
            <p><b>Nombre de admin: <input type="user" class="form-control" name="usu" 
                               placeholder="Introduzca su usuario" required/></b></p>
            </div>
            <div class="form-group">
            <p><b>Password: <input type="password" class="form-control" name="pass"  
                                placeholder="Introduzca la contraseña" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Nombre: <input type="text" class="form-control" name="name"  
                                placeholder="Introduzca su nombre" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Apellidos: <input type="text" class="form-control" name="apell"  
                                placeholder="Introduzca sus apellidos" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Dirección: <input type="text" class="form-control" name="dire"  
                                placeholder="Introduzca su dirección" required></b></p>
            </div>
            <div class="form-group">
            <p><b>CP: <input type="cp" min="01000" class="form-control" name="cp" maxlength="5"  
                                placeholder="Introduzca su cp" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Localidad: <input type="text" class="form-control" name="loca"  
                                placeholder="Introduzca su localidad" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Provincia: <input type="text" class="form-control" name="provi"  
                                placeholder="Introduzca su provincia" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Telefono: <input type="tel" class="form-control" name="tlf" maxlength="9"
                                placeholder="Introduzca nº de teléfono" required></b></p>
            </div>
            <div class="form-group">
            <p><b>Email: <input type="email" class="form-control" name="email"  
                                placeholder="Introduzca su email" required></b></p>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-default">Borrar</button>

        </form></center>
        <?php else: ?>
        <?php
            include ('conexion_bd/conexion.php');
        $insert="INSERT INTO USUARIOS VALUES ('".$_POST['usu']."',md5('".$_POST['pass']."'),'".$_POST['name']."','".$_POST['apell']."','".$_POST['dire']."','".$_POST['cp']."','".$_POST['loca']."','".$_POST['provi']."','".$_POST['tlf']."','".$_POST['email']."','A')";

   
        $result = $connection->query($insert);
  	        if (!$result) {
   		           echo "Este usuario administrador ya existe en el sistema, introduzca otro";
                   echo "<br><form action='usuarios.php'>
                        <input type='submit' value='Volver' />
                        </form>";
            } else {
              echo "Nuevo usuario administrador añadido, ya tiene su zona";
                
            }
    
        ?>
       <?php endif ?> 
       </div>
    </div>
