<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Booking</title>
</head> 
<body>
    <div class="contain">
<center>
        <h1 class="adm">Booking Online</h1>
        <div align="center" class="admission_form">
            <form action="" method="POST">
                <div class="adm_ant">  
                    <label class="label_text">Book Time</label>
                    <input class="input_deg" type="date" name="time" required>
                </div>

                <div class="adm_ant">
                    <label class="label_text">User</label>
                    <input class="input_deg" type="text" name="user" required>
                </div>

                <div class="adm_ant">
                    <label class="label_text">Room No:</label>
                    <input class="input_deg" type="number" name="Roomno" required>
                </div>

                <div class="adm_ant">
                    <label class="label_text">Phone</label>
                    <input type="number" class="input_deg" name="phone" required>
                </div>

                <div class="adm_ant">
                    <input class="btn btn-primary" type="submit" name="Book" value="Book now" id="submit">
                </div>

            </form>

        </div>
    </center>
    </div>

    
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
            header("location:Booking.php");
        }else{
            echo "Failed";
        }

    }


?>