<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="hotelmanagment";

   $conn= mysqli_connect($servername,$username,$password,$database);
   if($conn){
//echo "Succesful";
   }else{
    echo "Failed";
   }
?>


