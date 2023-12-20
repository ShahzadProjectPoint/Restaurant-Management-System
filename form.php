<?php
include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>PHP CRUD OPERATIONS</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">
        <div class="title">
            Registration form
        </div> 
        <div class="form">  
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" >
            </div>
            <div class="input_field">
                <label > Password</label>
                <input type="password" class="input" name="password" >
            </div>
            <div class="input_field">
                <label>Gender</label>
                <Select class="selectbox" name="gender">
                    <option value="Not Selected">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </Select>
            </div>
            <div class="input_field">
                <label>Email</label>
                <input type="email" class="input" name="email" >
            </div>
            <div class="input_field">
                <label>Usertype</label>
                <Select class="selectbox" name="usertype">
                    <option value="Not Selected">Select</option>
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
                </Select>
            </div>
           
            <div class="input_field">
                <label>Address</label>
                <textarea class="Textarea" name="address" id="" cols="30" rows="3"></textarea>
            </div>
            
            <div class="input_field">
                <input type="submit" value="Create Account" class="btn" name="account">
            </div>
            
        </div>

        </form>
       
    </div>


    
</body>
</html>


<?php
    if(isset($_POST['account'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $usertype=$_POST['usertype'];
        $address=$_POST['address'];

      $query="insert into user(fname,lname,password,gender,email,usertype,address) values('$fname','$lname','$password','$gender','$email','$usertype','$address')";
      $data=mysqli_query($conn,$query);
      if($data){
        header("location:login.php");
      }
       

    }



?>
