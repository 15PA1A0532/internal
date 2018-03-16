<?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="smart";
         $conn=mysqli_connect($servername,$username,$password) or die("connection failed: ". mysql_connect());
         if(!$conn)
         echo "failed";
         else
         echo"connection established";
          mysqli_select_db($conn,$db);
         
       ?>
