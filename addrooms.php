<?php
include("connection.php");
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION["usertype"]=="Admin"){
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
    <title>Add New Rooms</title>
</head>
<style>
    .adm{
        margin-top:70px;
        margin-bottom:50px;
    }
    .adm_ant{
    padding-top: 10px;
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
    padding-top: 20px;
}
.lab{
    margin-right:10px;
}
#submit{
    margin-left:90px;
}

.container .form .input_field{
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.container .form .input_field label{
    width: 200px;
    margin-right: 10px;
    font-size: 14px;
}


.input_field .selectbox{
    position: relative;
    width: 100px;
    height: 36px;
    border: 1px solid #D071F9;
    border-radius: 3px;
    -webkit-appearance: none;
    appearance: none;
    outline: none;
    margin-top:20px;
    margin-left:40px;
    padding-left:30px;
}
.Textc{
    padding:10px;
}


</style>
<body>
<center>
        <h1 class="adm"> Add Rooms</h1>
        <div align="center" class="admission_form">
            <form action="" method="POST">
                <div class="adm_ant">
                    <label class="label_text">Date</label>
                    <input class="input_deg" type="date" name="date">
                </div>

                <div class="adm_ant">
                    <label class="label_text lab">Room</label>
                    <input class="input_deg" type="text" name="room">
                </div>

                <div class="adm_ant">
                    <label class="label_text">Description</label>
                    <input class="input_deg" type="text" name="Description">
                </div>

                <div class="input_field">
                <label>Status</label>
                <Select class="selectbox" name="status">
                    <option class="Textc" value="Not Selected">Select</option>
                    <option value="Active">Active</option>
                    <option value="Deactive">Deactive</option>
                </Select>
            </div>
              
                <div class="adm_ant">
                    <input class="btn btn-primary" type="submit" name="Book" value="Add now" id="submit">
                </div>

            </form>

        </div>
    </center>
    
</body>
</html>

<?php
if(isset($_POST['Book'])){
    $date=$_POST['date'];
    $room=$_POST['room'];
    $Description=$_POST['Description'];
    $status=$_POST['status'];

    $query="insert into rooms (Date,Room,Description,status) values('$date','$room','$Description','$status')";
    $data=mysqli_query($conn,$query);
    if($data){
        header("location:Accomodation.php");
    }
}   

?>