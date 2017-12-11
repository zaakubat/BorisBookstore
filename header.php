
<!DOCTYPE html>
<html>
    <head>

        <title><?php echo $page_title; ?></title>
        
         <link href="style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    </head>
    <body>
        
<div id="header">
<div class="title"><?php echo $user_name ?></div>    
<div class="nav">
<?php
ECHO '<a href="index.php">Home </a>';
ECHO '<a href="library.php">Library</a>';
 ECHO '<a href="search-reviews.php">Reviews</a>';
   
    



?>
    <?php 
    
    $check="SELECT * FROM Customers WHERE user_id = 1";
    
    
			if (!isset($_SESSION['username'])) {
				ECHO "<div class='nlinks'>
                <a href='registration.php'>Register</a>
                <a href='login.php'>Sign In</a>
                    </div>";
				
			}
			else
			{
				if ($check == TRUE && ($_SESSION['username']) == 'admin') {
                ECHO '<a href="view_users.php">View Users</a>';
                ECHO '<a href="addBook.php">Book Entry</a>';
                ECHO '<a href="updateBook.php">Update</a>';
				}
                ECHO '<a href="review.php">Write Review</a>';
                ECHO '<a href="librarycart.php">Purchase</a>';
                
                
                ECHO "<div class='nlinks'>
				<a href='logout.php'>Log Out</a></div>
                ";
			}
			?>      
    
    
 </div>       
</div>
        
       
       
    </body>
</html>