<?php
    include ('formato/cabecera_admin.php');
?>
<div class="jumbotron">
      <div class="container">
        <?php
		if (!isset($_POST["id"])) : ?>
         
        <center><form role="form" method="post" enctype="multipart/form-data">
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
            <p><b>SINOPSIS: <textarea rows="3" class="form-control" name="sinopsis"  
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
            <p><b>PRECIO: <input type="number" min="1" class="form-control" name="precio" maxlength="3"  
                                placeholder="Introduzca precio" required></b></p>
            </div>
            <div class="form-group">
            <p><b>FECHA LANZAMIENTO: <input type="date" class="form-control" name="fecha"  
                                placeholder="Introduzca YYYY-MM-DD" required></b></p>
            </div>
            <div class='form-group'>
            <label for='imagen'><p><b>ADJUNTAR UNA IMAGEN</b></p></label>
            <input type="file" class="form-control" name="imagen" required>
            <p class="help-block">Selecciona una imagen de producto.</p>
            </div>
            <div class="form-group">
            <label><p><b>SELECCIONA GENERO</b></p></label><br>
            <select name="genero" required>
                <option value="ERO">ERO</option>
                <option value="FICC">FICC</option>
                <option value="HIST">HIST</option>
                <option value="INF">INF</option>
                <option value="JUV">JUV</option>
                <option value="POL">POL</option>
                <option value="ROM">ROM</option>
                <option value="TERR">TERR</option>
            </select>
            </div>
            
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-default">Borrar</button>

        </form></center>
         
        <?php else: 
          
            
          //Temp file. Where the uploaded file is stored temporary
                        $tmp_file = $_FILES['imagen']['tmp_name'];

                        //Dir where we are going to store the file
                        $target_dir = "img/";

                        //Full name of the file.
                        $target_file = strtolower($target_dir . basename($_FILES['imagen']['name']));

                        //Can we upload the file
                        $valid = true;

                        //Check if the file already exists
                        if (file_exists($target_file)) {
                            
                            $valid = false;
                            
                        }

                        //Chequeamos que la imagen sea menor de 2MB
                        if($_FILES['imagen']['size'] > (2048000)) {
                            $valid = false;
                       echo 'El tamaño de la imagen es muy grande, solo se admite 2MB.';
                        }

                        //Chequeamos la extensión que va a tener nuestra imagen
                        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); // Nosotros se ponemos las                                                                      extensiones que solo se pueden usar.
                        if ($file_extension != "jpg" &&
                            $file_extension != "jpeg" &&
                            $file_extension != "png" &&
                            $file_extension != "gif") {
                            $valid = false;
                            echo "Solo se admiten las extensiones JPG,JPEG,PNG y GIF";
                        }

                        if ($valid) {
                            //Put the file in its place
                            move_uploaded_file($tmp_file, $target_file);
                       }
        

                        include ('conexion_bd/conexion.php');

                        $insert="INSERT INTO libros VALUES ('".$_POST['id']."','".$_POST['titulo']."','".$_POST['sinopsis']."','".$_POST['autor']."','".$_POST['editorial']."','".$_POST['precio']."','".$_POST['fecha']."','$target_file','".$_POST['genero']."')";


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