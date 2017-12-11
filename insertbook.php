<html>
    <head>
    <link href="style.css" rel="stylesheet">
        <title>Thank You!</title>    
    <?php include ('session.php');?>
</head>
<body>
     <?php include ('session.php')?>
     <div id="header">
    <?php include 'header.php';?>
    </div> 
    <div id="page">
  <?php include('dbconnection.php');?>
    
   
    
  <?php
     
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}     
        
        
        
        
        
        
        
        
        
        
        
    $bookname = $_POST['title'];
     $author = $_POST['author'];
     $publisher = $_POST['publisher'];
     $genre = $_POST['genre'];
     $price = $_POST['price'];
     $description = $_POST['description'];
     $pic= "uploads/".$_FILES["image"]["name"];
     
 $sql= "INSERT INTO Books(title, author, publisher, genre, price, description, image)
     VALUES ('$bookname', '$author','$publisher', '$genre', $price, '$description', '$pic')";
        

        

        
   
    if ($conn->query($sql) === TRUE) {
    echo "You've Sucessfully Added a New Book";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

        
        
        
        
$conn->close();
    
  ?>  	


</div>
    
</body>
</html>