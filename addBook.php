<html>

<html>
<head>
      <link href="style.css" rel="stylesheet">
<title>Add a Book</title>    
    <?php include ('session.php');?>
</head>
    
<body>
    <div id="header">
    <?php include 'header.php';?>
    </div>  
    
    <div id="page">
    <h1>Insert a New Book</h1>
    <form class="addbookform" action="insertbook.php" method="POST" enctype="multipart/form-data">
        <label>Title:</label><input type="text" name="title"><br>
        <label>Author:</label><input type="text" name="author"><br>
        <label>Publisher</label><input type="text" name="publisher"><br>
         <label>Price</label><input type="number" name="price"><br>
        <br>
        
        <label>Genre:</label>
        <select name="genre">
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
        <br>
        
        
        <label>Description</label><br><textarea name="description" rows="5" cols="40" maxlength="250"></textarea><br><br>
        
        <lablel>Select image:</lablel>
        <input type="file" name="image" id="image">
        
        <input type="submit">
        
        
        
        
  
    </form>
        
        
        
       
        
        </div>
</body>    
</html>
    
    
   