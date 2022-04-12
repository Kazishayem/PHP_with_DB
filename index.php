<?php

$insert = false;
if(isset($_POST['name'])){


$server = "localhost";
$username = "root";
$password = "1260";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to the database failed due to: " . mysqli_connect_error());
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];



$sql = "INSERT INTO `kazibari_family`.`family_member` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`)
 VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
//  echo $sql;

 if($con->query($sql) == true){
    //  echo "Successfully inserted";
    $insert = true;
 }
 else{
     echo "ERROR:  $sql <br> $con->error";
 }

 $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <title>The BookList</title>
</head>
<body>
    <img class="kazi" src="shayem.jpg" alt="kazi">
    <div class="container">

        <h3>Welcome to KaziBari</h3>
        <p>Give Your Information</p>


        
        <?php
        if($insert == true){
            echo " <h4 class='submittingMsg'>Thank You For Your Response</h4>";
        }
       
        ?>
        


        <form action="index.php" method="POST">

            <input type="text" name="name" id="name" placeholder="Enter Your Name"> 
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
            
            
        </form>

    </div>
    <script src="index.js">


    </script>
</body>
</html>
