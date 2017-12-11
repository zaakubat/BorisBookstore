<?php include('dbconnection.php'); ?>
<!DOCTYPE html>
<html>
	<head>
        <link href="style.css" rel="stylesheet">
        <title>Update a Book</title>    
    <?php include ('session.php');?>
		<title></title>
		<style>
			table{
				border-radius: 10px;
			}
			table, td, th{
				border: 2px solid black;
			}
			td,th{
				padding: 15px;
			}
		</style>
	</head>
	<body>
        <div id="header">
    <?php include 'header.php';?>
    </div>
        <div id="page">
            <h1>Update Book</h1>
		<?php
		$sql_select = "SELECT * FROM Books";
		$result = $conn->query($sql_select);
		$booksArray = array();

		echo 
			"<table style='margin-left:-5px;'> 
				<tr>
					<th>Book ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Description</th>
				</tr>";
		
		if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){

				array_push($booksArray, $row['title']);

				echo 
					"<tr>".	
				    "<td>".$row['book_id']."</td>".
                    "<td>".$row['title']."</td>".
                    "<td>".$row['author']."</td>".
                    "<td>".$row['publisher']."</td>".
                    "<td>".$row['genre']."</td>".
                    "<td>".$row['price']."</td>".
                    "<td>".$row['description']."</td>".
					"</tr>"; 
			}
		}

		ECHO  "</table><br>";

		ECHO  "<form class='updatebook' action='changebook.php' method='POST'>";
        
		ECHO  	"<label>Choose a book to update:</label>";
        
		ECHO  	"<select name='booktoupdate' required>";
				foreach($booksArray as $value){
		ECHO  		"<option value='$value'> $value </option>";
				} 	
		ECHO  	"</select>";
		ECHO  	"<br><br>";
		ECHO  	"<div>";
		ECHO 		"<label>Title:</label><input type='text' name='bookname'>";
		ECHO  		"<label>Author:</label><input type='text' name='author'/><br>";
        ECHO"<label>Publisher:</label><input type='text' name='publisher'/>";
		ECHO  		"<label>Genre:</label><input type='text' name='genre'/><br>";
        ECHO "<label>Price:</label><input type='number' name='price'/>";
		ECHO  		"<label>Description:</label><input type='text' name='description'/><br>";
        "<label>Image:</label><input type='file' name='image'/><br>";
		ECHO  		"<input type='submit' value='Update Book'/>";
		ECHO  "</form>";
		?>
        </div>
	</body>
</html>