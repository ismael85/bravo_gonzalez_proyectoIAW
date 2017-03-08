<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <?php
		if (!isset($_POST["id"])) : ?>
         
        <center><form role="form" method="post" >
            <div class="form-group">
            <label><h2><b><u>Añadir género</u></b></h2></label>
            <p><b>Id género: <input type="text" class="form-control" name="id" 
                               placeholder="Introduzca ID" required maxlength="4"/></b></p>
            </div>
            <div class="form-group">
            <p><b>Nombre género: <input type="text" class="form-control" name="nom_gen"  
                                placeholder="Introduzca nombre género" required></b></p>
            </div>
            
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-default">Borrar</button>

        </form></center>
        <?php else: ?>
        <?php
            include ('conexion_bd/conexion.php');
        $insert="INSERT INTO GENERO VALUES ('".$_POST['id']."','".$_POST['nom_gen']."')";

   
        $result = $connection->query($insert);
  	        if (!$result) {
   		         echo "Datos existentes, introduzca otros valores para el género";
                 echo "<br><form action='dist_genero.php'>
                        <input type='submit' value='Volver' />
                        </form>";
                
            } else {
              echo "Nuevo género añadido";
                
            }
    
        ?>
       <?php endif ?> 
       </div>
    </div>
