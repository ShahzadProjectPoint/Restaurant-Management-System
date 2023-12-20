<?php
    include("connection.php");
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
    <link rel="stylesheet" href="style.css">
    <title>Hotel Managment System</title>
</head>
<body>
    <nav>    
        <label class="logo">LODGE</label>
        <ul>
            <li><a href="">Home</a></li>
            
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1" id="#">
        <label class="img_text">Welcome To Luxirious Hotel</label>
        <img class="main_img" src="./img/image7.jpg" alt="">


    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="Welcome_img" src="img/staff.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h1 class="head">Managment Staff</h1>
                <p class="para">The staff can be placed into three different categories: administration, guest services and support staff. Administration positions range from managers to secretaries. Guest services are the staff that care for the guests directly e.g. maids, waiter/waitress and cooks. As such, having a positive, enthusiastic, cheerful and generous outlook on life will translate into someone who cares about their team, listens to instructions from leaders and is able to communicate with customers with professionalism.</p>
            </div>
        </div>
    </div>

    <center>
        <h1>Rooms Available</h1>
    </center>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img class="Teacher" src="img/image3.jpg" alt="">
            <h3 class="centerD">Room no: 103</h3>
            <p class="Images_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet a autem provident totam aliquam nostrum asperiores atque earum maxime, aut eaque ratione at magnam quis error corrupti praesentium in?</p>
            <a class="btn btn-primary" id="rightD" href="Booking.php">Book now</a>
            </div>
            <div class="col-md-4">
            <img class="Teacher" src="img/image4.jpg" alt="">
            <h3 class="centerD">Room no: 104</h3>
            <p class="Images_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet a autem provident totam aliquam nostrum asperiores atque earum maxime, aut eaque ratione at magnam quis error corrupti praesentium in?</p>
            <a clas s="btn btn-primary" id="rightD" href="Booking.php">Book now</a>
            </div>
            <div class="col-md-4">
            <img class="Teacher" src="img/image5.jpg" alt="">
            <h3 class="centerD">Room no: 105</h3>
            <p class="Images_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet a autem provident totam aliquam nostrum asperiores atque earum maxime, aut eaque ratione at magnam quis error corrupti praesentium in?</p>
            <a class="btn btn-primary" id="rightD" href="Booking.php">Book now</a>
            </div>
        </div>
    </div>
    

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

    <footer>
        <h3 class="footer_txt">All @copyright reserved by web tech Knowledge</h3>
    </footer>
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
            echo "<script>alert('Room is booked');</script>";
            header("location:index.php");
        }else{
            echo "Failed";
        }

    }


?>