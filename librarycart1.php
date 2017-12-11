 <?php include ('session.php');?>
<html>

<html>
<head>
   
      <link href="style.cssc" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Book Library</title>    
    
</head>
    
<body>
    <div id="header">
    <?php include 'header.php';?>
    </div>  
    
    <div id="page"> 
    <h1>Book Library</h1>
        <p>This page is still under construction.</p>
        <div id="librarycontainer">
        <?php
         include('dbconnection.php');
        $books = "SELECT * FROM Books";
        $result = $conn->query($books);
        
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                
        ?>
        <div class="col-md-4">  
                     <form method="post" action="librarycart.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
        </div>       
        <?php 
               
            }
        } 
        
        ?>
    
        </div>
        
        </div>
</body>    
</html>
    
    
   