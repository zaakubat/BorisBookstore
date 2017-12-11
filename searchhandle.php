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
           <div id="librarycontainer">
		<?php 
        
        include('dbconnection.php');
        $bookword = $_POST['searchbook'];
        $authorword = $_POST['searchauthor'];
        $genreword = $_POST['searchgenre'];
            
            if(empty($bookword) && empty($authorword) && empty($genreword)){   
            echo 'please enter something in the search';
            
            }
            
            
        /*-----Looking for Book-------*/
            
      if(!empty($bookword)){
                
            $search="SELECT * FROM Books WHERE title LIKE '$bookword%'";
           $result = $conn->query($search);
        
           if($result->num_rows >0){
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
            else{
                ECHO 'Sorry'.' '. $bookword.' '. 'is not in our library';
            }
                
                
    }
            /*-----Looking for author-------*/
            
            if(!empty($authorword)){
                
               $search="SELECT * FROM Books WHERE author LIKE '$authorword%'";
           $result = $conn->query($search);
        
           if($result->num_rows >0){
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
            else{
                ECHO 'Sorry'.' '. $authorword.' '. 'is not in our library';
            } 
                
                
            }
        
        /*-----Looking for genre-------*/
            if(!empty($genreword)){
                
                 $search="SELECT * FROM Books WHERE genre LIKE '$genreword%'";
           $result = $conn->query($search);
        
           if($result->num_rows >0){
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
            else{
                ECHO 'Sorry'.' '. $genreword.' '. 'is not in our library';
            } 
                
                
            
         
            }
            
            
        
        
                ?></div>
        </div>
	</body>
</html>