<?php include('dbconnection.php'); ?>
<!DOCTYPE html>
<html>
	<head>
        <link href="style.css" rel="stylesheet">
        <title>Review a Book</title>    
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
            <h1>Review Books</h1>
		<?php
		$sql_select = "SELECT * FROM Books";
		$result = $conn->query($sql_select);
		$booksArray = array();

		echo 
			"<table style='margin-left:-5px; display:none;'> 
				<tr>
					<th>Book ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Cover</th>
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
                    "<td>".$row['image']."</td>".
					"</tr>"; 
			}
		}

		ECHO  "</table><br>";

		ECHO  "<form class='reviewbook' action='reviewbook.php' method='POST'>";
        
		ECHO  	"<label>Choose a book to review:</label><br>";
        
		ECHO  	"<select name='booktoreview' required>";
				foreach($booksArray as $value){
		ECHO  		"<option value='$value'> $value </option>";
				} 	
		ECHO  	"</select>";
		ECHO  	"<br><br>";
		ECHO  	"<div>";
		ECHO 		"<textarea rows='10' cols='50' name='review' placeholder='write your review here'/></textarea>";
		ECHO  	"<br><br>";
		ECHO  		"<input type='submit' value='Review Book'/>";
		ECHO  "</form>";
		?>
        </div>
	</body>
</html>