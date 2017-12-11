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
			$sql_update = "UPDATE Books SET ";

			$fields = array();
			$bookToUpdate = $_POST['booktoupdate'];

			$bookname = NULL;
			$author = NULL;
            $publisher = NULL;
			$genre = NULL;
            $price = NULL;
			$description = NULL;
            $image = NULL;

			if(!empty($_POST['bookname'])){
				$bookname = "title='".$_POST['bookname']."'";
				array_push($fields, $bookname);
			}
			if(!empty($_POST['author'])){
				$author = "author='".$_POST['author']."'"; 
				array_push($fields, $author);
			}
            if(!empty($_POST['publisher'])){
				$publisher = "publisher='".$_POST['genre']."'"; 
				array_push($fields, $publisher);
			}
			if(!empty($_POST['genre'])){
				$genre = "genre='".$_POST['genre']."'"; 
				array_push($fields, $genre);
			}
			if(!empty($_POST['price'])){
				$price = "price=".$_POST['price']; 
				array_push($fields, $price);
			}
            if(!empty($_POST['description'])){
				$description = "description='".$_POST['description']."'"; 
				array_push($fields, $description);
			}

			$sql_update .= join(",", $fields); 
			$sql_update .= " WHERE title='$bookToUpdate';";

			echo $sql_update;

			if($conn->query($sql_update) === TRUE){
				echo $bookToUpdate." is updated successfully";
			} else{
				echo "Error: ". $conn->error."<br>";
			}
		?>
        </div>
	</body>
</html>