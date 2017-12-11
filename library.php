<html>

<html>
<head>
      <link href="style.css" rel="stylesheet">
<title>Book Library</title>    
    <?php include ('session.php');?>
</head>
    
<body>
    <div id="header">
    <?php include 'header.php';?>
    </div>  
    
    <div id="page">
    <h1>Book Library</h1>
        
             <form class="searchform" action="searchhandle.php" method="post">
		<input type="text" name="searchbook" placeholder="Search for Book Title"/>
        <input type="text" name="searchauthor" placeholder="Search for an author"/>
        
                    <select name="searchgenre">
        <option value="">Select Genre</option>
        <option value="action">Action</option>
        <option value="autobiography">Autobiography</option>
        <option value="adventure">Adventure</option>
        <option value="comedy">Comedy</option>
        <option value="comic">Comic</option>
        <option value="drama">Drama</option>    
        <option value="fantasy">Fantasy</option>
        <option value="horror">Horror</option>
        <option value="mystery">Mystery</option>
        <option value="science-fiction">Science Fiction</option>
		<option value="romance">Romance</option>
        </select>
                 
                 
		<input type="submit" value="search" />
                 
     
	</form>
        
        <div id="librarycontainer">
        <?php
         include('dbconnection.php');
        $books = "SELECT * FROM Books";
        $result = $conn->query($books);
        
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                
              
                
                
             ECHO "<div id='box'>
                 
                 <div class='bt'> ". $row['title']." </div><br>
                    
                    
                <img src=".$row['image']." alt='img' class='img'><br>
                    <div class='infobox'>
                    
                    <span style='padding-bottom:4px;'>
                    By ". $row['author']."
                    </span><br><br>
                    
                    <span style='padding:25px;'>
                    Published by  ". $row['publisher']."
                    </span>
                    <br><br>
                    
                    <span style='top:50px;'>
                    Sypnopsis: ".$row['description']."
                    </span>
                    <br><br>
                    
                     <span style='padding:30px;'>
                     $".$row['price']."
                    </span>
                    
                   </div> 
                </div>";
            }
        }
        
        
        
        ?>
    
        </div>
        
        </div>
</body>    
</html>
    
    
   