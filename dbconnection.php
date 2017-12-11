<?php
     $servername="localhost";
     $username="CS315_bookstore";
     $password="CSbookstore";
     $dbname="db_CS315_bookstore";
     
     $conn = @mysqli_connect($servername, $username, $password, $dbname);
    
     if(!$conn){
        die("Connection Failed: " . $conn->connection_error);
     }
    
 ?>