<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <?php
		if (!isset($_POST["id"])) : ?>
         
        <center><form role="form" method="post" >
            <div class="form-group">
            <label><h2><b><u>Registrar libro</u></b></h2></label>
            <p><b>ISBN: <input type="text" class="form-control" name="id" 
                               placeholder="Introduzca ISBN" required/></b></p>
            </div>
            <div class="form-group">
            <p><b>TITULO: <input type="text" class="form-control" name="titulo"  
                                placeholder="Introduzca titulo" required></b></p>
            </div>
            <div class="form-group">
            <p><b>SINOPSIS: <textarea rows="5" class="form-control" name="sinopsis"  
                                      placeholder="Introduzca sinopsis" required></textarea></b></p>
            </div>
            <div class="form-group">
            <p><b>AUTOR: <input type="text" class="form-control" name="autor"  
                                placeholder="Introduzca autor" required></b></p>
            </div>
            <div class="form-group">
            <p><b>EDITORIAL: <input type="text" class="form-control" name="editorial"  
                                placeholder="Introduzca editorial" required></b></p>
            </div>
            <div class="form-group">
            <p><b>PRECIO: <input type="number" class="form-control" name="precio" maxlength="3"  
                                placeholder="Introduzca precio" required></b></p>
            </div>
            <div class="form-group">
            <p><b>FECHA LANZAMIENTO: <input type="date" class="form-control" name="fecha"  
                                placeholder="Introduzca fecha" required></b></p>
            </div>
            <div class="form-group">
            <p><b>IMAGEN: <input type="text" class="form-control" name="img"  
                                placeholder="Introduzca ruta imagen" required></b></p>
            </div>
            <div class="form-group">
            <p><b>GÉNERO: <input type="text" class="form-control" name="genero" placeholder="Introduzca siglas genero" required></b></p>
            </div>
            
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-default">Borrar</button>

        </form></center>
        <?php else: ?>
        <?php
            include ('conexion_bd/conexion.php');
        $insert="INSERT INTO LIBROS VALUES ('".$_POST['id']."','".$_POST['titulo']."'),'".$_POST['sinopsis']."','".$_POST['autor']."','".$_POST['editorial']."','".$_POST['precio']."','".$_POST['fecha']."','".$_POST['img']."','".$_POST['genero']."')";

   
        $result = $connection->query($insert);
  	        if (!$result) {
   		           echo "Este libro ya existe en el sistema, introduzca otro";
                   echo "<br><form action='libros.php'>
                        <input type='submit' value='Volver' />
                        </form>";
            } else {
              echo "Nuevo libro añadido";
                
            }
    
        ?>
       <?php endif ?> 
       </div>
    </div>