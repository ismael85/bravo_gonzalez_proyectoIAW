<?php
  //Open the session
  session_start();
  if (isset($_SESSION["user"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
    var_dump($_SESSION);
  } else {//Si hay una sesión iniciada que la destruya y se vaya al index.php
    session_destroy();
    header("Location: index.php");
  }
 ?>