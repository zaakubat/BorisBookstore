<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php include ('session.php')?>
    <div id="header">
    <?php include 'header.php';?>
    </div> 
    <div id="page">
<?php
require('dbconnection.php');

if (isset($_REQUEST['username'])){

    $username = $_POST['username'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $address = $_POST['addresss'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $email = $_POST['email'];
	$password = $_POST['password'];
    

        $query = "INSERT into `Customers` (username, password,first_name, last_name, address, city, state, email)
VALUES ('$username', '".md5($password)."', '$fname','$lname', '$address', '$city', '$state', '$email')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
        <h1>Registration</h1>
<div class="registerform">

<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="text" name="first_name" placeholder="First Name" required>
<input type="text" name="last_name" placeholder="Last Name" required><br>
<input type="text" name="address" placeholder="Address" required>
<input type="text" name="city" placeholder="City" required> 
<input type="text" name="state" placeholder="State" required>   
<br>
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
    
        
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
    </div>
</body>
</html>