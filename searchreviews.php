<?php include('dbconnection.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			table, td, th{
				border: 1px solid brown;
			}
			td,th{
				padding: 15px;
			}
		</style>
	</head>
	<body>
		<?php
		$bookstitle =($_POST['title']);
		$sql_select = "SELECT Books.title, Reviews.title, Reviews.review, Reviews.username,
		FROM Books
		INNER JOIN Reviews ON '$bookstitle' = Reviews.title"; 
		

		
      
		$result = $conn->query($sql_select);
		
		echo
			"<table>
				<tr> 
					<th>username</th>
					<th>title</th>
					<th>review</th>
					
				</tr>";
		
		
		if($result->num_rows > 0){
		
			while($row = $result->fetch_assoc()){
				echo 
					"<tr>".
						"<td>" .$row['username']."</td>".
						"<td>" .$row['title']."</td>".
						"<td>" .$row['review']."</td>".
						
					"</tr>";
			}
		}
		echo "</table>";
		?>
	</body>
</html>