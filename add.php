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
    <title>Add New Accommodation</title>
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
    margin-left:70px;
}
</style>
<body>
<center>
        <h1 class="adm"> Add Accommodation</h1>
        <div align="center" class="admission_form">
            <form action="" method="POST">
                <div class="adm_ant">
                    <label class="label_text">Age</label>
                    <input class="input_deg" type="number" name="Age">
                </div>

                <div class="adm_ant">
                    <label class="label_text lab">Accommodation</label>
                    <input class="input_deg" type="text" name="Accommodation">
                </div>

                <div class="adm_ant">
                    <label class="label_text">Description</label>
                    <input class="input_deg" type="text" name="Description">
                </div>

                <div class="adm_ant">
                    <label class="label_text">Price</label>
                    <input type="number" class="input_deg" name="Price">
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
    $age=$_POST['Age'];
    $Accommodation=$_POST['Accommodation'];
    $Description=$_POST['Description'];
    $Price=$_POST['Price'];

    $query="insert into accom (age,Accomodation,Description,Price) values('$age','$Accommodation','$Description','$Price')";
    $data=mysqli_query($conn,$query);
    if($data){
        header("location:Accomodation.php");
    }
}

?>