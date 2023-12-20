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
    <link rel="stylesheet" href="admin.css">
    <title>admin Dashboard</title>
</head>
<style>
     .content h1{
        margin-bottom:30px;
        margin-left:300px;
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

</style>
<body>
<header class="header">
    <a href="">Admin Dashboard</a>
    <div class="Logout">
        <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>
</header>
<aside>
    <ul>
        <li><a href="adminhome.php">Dashboard</a></li>
        <li><a href="Accomodation.php">Accomodation </a></li>
        <li><a href="Rooms.php"> Rooms</a></li>
        <li><a href="book_list.php">Book List</a></li>
       
    </ul>
</aside>

<div class="content">
    <h1> Accommodation Data</h1>
  
<?php
$query="select * from accom";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if(!$total==0){
    echo " <table class='table'>
    <thead>
      <tr>

        <th scope='col'>ID</th>
        <th scope='col'>Age</th>
        <th scope='col'>Accomodation</th>
        <th scope='col'>Description</th>
        <th scope='col'>Price</th>  
        <th scope='col'>Add</th>  
        
      </tr>
    </thead>";

    while($result=mysqli_fetch_assoc($data)){
        echo "<tbody>
        <tr>
          <th scope='row'>".$result['id']."</th>
          <th>".$result['age']."</th>
          <td>".$result['Accomodation']."</td>
          <td>".$result['Description']."</td>
          <td>".$result['Price']."</td>
          <td><a class='btn btn-primary' href='add.php'>Add New</a></td>
         
        </tr>
       
      </tbody>";
    }
}

?>
   
 
</table>
    
</div>
</body>
</html>