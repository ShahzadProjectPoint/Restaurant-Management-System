<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION["usertype"]=="Customer"){
    header("location:login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Customer Dashboard</title>
</head>
<style>
    img{
        height:350px;
        width:970px;
        margin-bottom:0;
    }
    .Home{
      font-size:22px;
    }
    .Home_para{
        text-align:center;
        font-size:20px;
        padding-top:0;
        margin-top:0;
    }
    footer{
    background-color:brown;
    height: 40px;
    width:100%;
    margin-top:57px;
}
    .footer_txt{
    text-align: center;
    top:20%;
    margin-left:100px;
    position: relative;
    color:#ddd; 
} 
.header{
    background-color:#424a5b;
    line-height:50px ;
    padding-left: 30px;
    margin-bottom:0;
    padding-bottom:0;
}
header a{
    color:#fff;
}
header a:hover{
    color:#ddd;
}
ul li{
    list-style: none;
    padding-bottom: 20px;
    font-size: 14px;
}
ul{
    padding-top:2%;
}
.Customr{
    padding-top:40px;
    padding-left:250px;

}

</style>
<body>
<header class="header">
    <a href="">Customer Dashboard</a>
    <div class="Logout">
        <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>
</header>
<aside>
    <ul>
        <li><a href="customerhome.php">Dashboard</a></li>
        <li><a href="EditBooking.php"> Booking</a></li>
        
    </ul>
</aside>

<h1 class="Customr">Customer Dashboard</h1>



</body>
</html>