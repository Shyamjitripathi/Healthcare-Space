<?php  

 // connect datbase 
                    $username = "ravindra";
                    $password = "Ravi@9648";
                    $servername = "db4free.net:3306";
                    $dbname = "notes_jhansi_sit";
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if ($conn) {
                      echo'db connected';
    
                     }else{
                      echo"not connected database".mysqli_connect_error();
                     }


?>