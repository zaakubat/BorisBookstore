
<?php include('session.php')?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="style.css">

 <!--<script src="booksslideshow.js"></script>-->
</head>

<body>   

 <div id="header">
  
    <?php include 'header.php';?>
    </div>     
 <?php include('session.php')?>


<div id="page">
    <h1> ~ WELCOME TO BORIS BOOKS STORE ~ </h1>
    
    <h3>POPULAR BOOKS TRENDING NOW...</h3>
    <div id="booksslideshow">
            
      
    <div class="w3-content w3-section" style="max-width:500px">
			<img class='BooksSlide' src="pics/Gone Girl.jpg">
			<img class="BooksSlide" src="pics/I am Malala.jpg">
			<img class="BooksSlide" src="pics/Corduroy.jpg">
			<img class="BooksSlide" src="pics/If I Stay.jpg">
			<img class="BooksSlide" src="pics/Romeo and Juliet.jpg">
			<img class="BooksSlide" src="pics/The Catcher in the Rye.jpg">
			<img class="BooksSlide" src="pics/The Maze Runner.jpg">
			<img class="BooksSlide" src="pics/The Giver.jpg">
			<img class="BooksSlide" src="pics/Charlotte's Web.jpg">
			<img class="BooksSlide" src="pics/The Hunger Games.jpg">
			<img class="BooksSlide" src="pics/The Notebook.jpg">
            <img class="BooksSlide" src="pics/A Walk to Remember.jpg">
			<img class="BooksSlide" src="pics/All American Boys.jpg">
			<img class="BooksSlide" src="pics/chicka chicka boom boom.jpg">
			<img class="BooksSlide" src="pics/Are you there God It's Me Margaret.jpg">
                </div>
    <script>
   var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("BooksSlide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

    
    </script>
           
        
	</div>
    


	<p> Your one way stop to shop all your favorite books.
        
    <h2>Best Books of 2016 | The New York Times</h2>
     <img src="pics/thenorthwater.jpg" class="inpics">
   
    <img src="pics/inthedarkroom.jpg" class="inpics">
    <img src="pics/thevegetarian.jpg" class="inpics">
    <img src="pics/warandturpentine.jpg" class="inpics">
    <img src="pics/darkroom.jpg" class="inpics">
	
	<h2> About Us</h2>
	<p> Boris Bookstore gets the name from one of the developers of this bookstore. The bookstore was created by Zainab Akubat, Felicia Toro, and  Jean Boris Konan. Our bookstore is a great place to buy your favorite books including free shipment right to your door. Our only method of payment is Paypal. Sign up now to start buying books and to start the adventure of amazing reading. 
	
	<br>
	<br>

	<footer>
	
    </footer>
</div>    
</body> 
</html>