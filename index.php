<?php
include "config.php";

$msg = null;
if(isset($_POST['submit'])){

       $name = mysqli_real_escape_string($db,$_POST['name']);
       $name = strip_tags($name);
        $id = "KG" .  rand(1,1000);

    //  echo "Your Name is " . $name . " " . "and your id is " . $id;

    
            $query = "INSERT INTO users (user_id,name) VALUES('$id', '$name')";

            //Query Database
        if(mysqli_query($db, $query))
        {
        echo "<script>alert('Successfully Registered');</script>";
            
        }
        else{
                echo"<script>alert('Something wrong!!!');</script>";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Kelvin Aron Msindai" content="Fullstack Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>usergenarator</title>
    <style>
     
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Enter Name</h1>
            <p>**This is web generator that generate user IDENTITY</p>
            <div class="abc">
                <label for="name" id="label">Name</label> <br>
                <input type="text" name="name" placeholder="Please Enter Name" required>

                <input type="submit" value="submit" name="submit">
                <p class="link" style="padding-bottom: 100px;"><a href="index2.php">Click to view USER</a></p>
            </div>

           
        </form>

    </div>
</body>
</html>


<!-- 
    Developed by: kevoocodes
 -->