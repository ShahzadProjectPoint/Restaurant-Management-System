

<?php
session_start();
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
    <title>Login Form</title>
</head>
<body>
      
    <center class="Bac_color">
    <?php
    error_reporting(0);
    include("connection.php");
    ?>
        <div class="form_deg">
  
            <form action="#" method="POST" class="Login_form">
                <div class="form_deg adm_ant">
                    <label class="label_text1">Username</label>
                    <input  class="input_deg1" type="text" name="Username">
                </div>
                <div  class="adm_ant">
                    <label class="label_text1">Password</label>
                    <input  class="input_deg1" type="password" name="password">
                </div>
                <div  class="adm_ant">
                    <input class="btn btn-primary" type="submit" name="submit" id="sidho" value="Login">
                </div>
                <div class="adm_ant">
                    <label class="Registerhere">If you are new Register here</label>
                   <a class="A_design" href="form.php">Create account</a>
                </div>
            </form>
        </div>
    </center>

    
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $username=$_POST['Username'];
        $password=$_POST['password'];
        $query="select * from user where email='$username' && password='$password'";
        $data=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($data);
        if($result['usertype']=='Admin'){
            $_SESSION['username']=$username;
            header("location:adminhome.php");
        }elseif($result['usertype']=='Customer'){
            $_SESSION['username']=$username;
            header("location:customerhome.php");
        }
    }

?>