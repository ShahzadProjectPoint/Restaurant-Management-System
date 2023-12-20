<?php
include("connection.php");
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
    <title>Customer Edit Booking</title>
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
.label_text{
    display: inline-block;
    width:100px;
    text-align: right;
    padding-right: 10px;
}
.input_deg{
    width: 30%;
    height: 40px;
    border-radius: 25px;
    border: 1px solid blue;
    font-size: 18px;
    padding:5px;
}
.adm_ant{
    padding-top: 10px;
}
#submit{
    position: relative;
    width:10%;
    left:3%;
}
.adm{
    padding-top:70px;
    margin-left:40px;
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

<center>
        <h1 class="adm">Booking Online</h1>
        <div align="center" class="admission_form">
            <form action="" method="POST">
                <div class="adm_ant">
                    <label class="label_text">Book Time</label>
                    <input class="input_deg" type="date" name="time">
                </div>

                <div class="adm_ant">
                    <label class="label_text">User</label>
                    <input class="input_deg" type="text" name="user">
                </div>

                <div class="adm_ant">
                    <label class="label_text">Room No:</label>
                    <input class="input_deg" type="number" name="Roomno">
                </div>

                <div class="adm_ant">
                    <label class="label_text">Phone</label>
                    <input type="number" class="input_deg" name="phone">
                </div>

                <div class="adm_ant">
                    <input class="btn btn-primary" type="submit" name="Book" value="Book now" id="submit">
                </div>

            </form>

        </div>
    </center>




</body>
</html>

<?php
error_reporting(0);
    if(isset($_POST['Book'])){
        $time=$_POST['time'];
        $user=$_POST['user'];
        $Roomno=$_POST['Roomno'];
        $phone=$_POST['phone'];

        $query="insert into votingtable(booking_time,User,Room_no,Phone) values('$time','$user','$Roomno','$phone')";
        $data=mysqli_query($conn,$query);
        if($data){
            echo "<script>alert('Booking is conformed');</script>";
           
        }else{
            echo "Failed";
        }

    }


?>