<?php include ('session.php');?>

<?php include('dbconnection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="style.css" rel="stylesheet">
	<title>Search Books</title>    
  
</head>
<body>	
	<div id="header">
    <?php include 'header.php';?>
    </div>
	<div id="page">
    <h1>Search Book Reviews</h1>
	
	<form  method="POST" action="searchbar.php">
		<input type="text" name="searchbook" placeholder="Search for books..." value="<?php if(isset($_POST['title'])) ?> "/>
		

		<input type="submit" name="Submit" value="SEARCH" />
	</form>

        </div>
 	
</body> 
   

</html>
    
    
   