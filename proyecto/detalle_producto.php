<?php
    include ('formato/cabecera.php');
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <h2><b>Bienvenido a la librería online Bravo</b></h2>
        <p>En este lugar podrá encontrar multitud de libros que puede comprar. Continuamente añadimos novedades. Visítenos con frecuencia para sus compras.</p>
        <h2 align="center"><b>NOVEDADES</b></h2>
          <!-- Example row of columns -->
     <div class="row">
        
                 
           <?php
      //CREATING THE CONNECTION
          if (isset($_GET['titulo'])) {
      $connection = new mysqli("localhost", "admin", "12345", "proyecto");
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT * FROM libros WHERE TITULO=".$_GET['titulo'];
      if ($result = $connection->query($query)) {
          
          ?>
          
          
          

      <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              
                echo "<div class='col-md-4'>";
                echo "<form class='navbar-form navbar-right' role='form'>";
                
                echo "<h4><b>$obj->TITULO</b></h4>";
                echo "<p>$obj->AUTOR</p>";
                echo "<p>$obj->EDITORIAL</p>";
                echo "<p>$obj->FECHA_LANZA</p>";
                echo "<img src='".$obj->IMG."' width='250px' height='250px'>";
                echo "<p>$obj->SINOPSIS</p>";
                echo "<p>$obj->PRECIO €</p>";
              
              
              echo "<input type='button' value='Añadir al carrito' class='btn btn-success' onClick='location.href='carrito.php'/>";
              
              echo "</form>";
              
                echo "</div>";
               
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } else {
            echo "INVALID QUERY";
          }


        } else {
          //NO $_GET["id"] present
          echo "PRODUCTO NO SELECCIONADO";
        }

    ?>
  </div>
  </div>

   </div>