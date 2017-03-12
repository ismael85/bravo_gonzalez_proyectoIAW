 <?php
 //CREATING THE CONNECTION
                $connection = new mysqli("localhost", "admin", "12345", "proyecto");
               
                //TESTING IF THE CONNECTION WAS RIGHT
                    if ($connection->connect_errno) {
                        printf("Connection failed: %s\n", $connection->connect_error);
                        exit();
                    }
?>