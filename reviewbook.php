<?php include('dbconnection.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet">
        <title>Thank You!</title>    
    <?php include ('session.php');?>

	</head>
	<body>
        <div id="header">
    <?php include 'header.php';?>
    </div>  
        <div id="page">
		<?php
         
            
               
    $bookToReview = $_POST['booktoreview'];
     $username =$_SESSION['username'];
     $review =$_POST['review'];

     $sql= "INSERT INTO Reviews( username, title, review)
     VALUES ('$username','$bookToReview',  '$review')";
            

            
            

			if($conn->query($sql) === TRUE){
				echo $bookToReview." is updated successfully";
			} else{
				echo "Error: ". $conn->error."<br>";
			}
		?>
        </div>
	</body>
</html>