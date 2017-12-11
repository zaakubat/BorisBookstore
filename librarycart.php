  

<?php 
 include ('session.php');
 session_start();
 $connect = mysqli_connect("localhost", "CS315_bookstore", "CS315_bookstore", "db_CS315_bookstore");
 if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"])) 
      {
          $item_array_bookid = array_column($_SESSION["shopping_cart"], "item_id");
          if(!in_array($_GET["book_id"], $item_array_bookid)) 
          {
              $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["book_id"],  
                     'item_title'               =>     $_POST["hidden_title"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"] 
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
          }
          else 
          {
              echo '<script>alert("Item Already Added")</script>';  
              echo '<script>window.location="librarycart.php"</script>';  
          }

      }
      else 
      {
          $item_array = array (
              'item_id'       => $_GET["book_id"],
              'item_title'       => $_POST["hidden_title"],
              'item_price'       => $_POST["hidden_price"],
              'item_quantity'       => $_POST["quantity"]
            );
          $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["book_id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="librarycart.php"</script>';  
                }  
           }  
      }  
 }  

?>

<!doctype html>
<html>
    <head>

  

      <title>Book Library</title>  

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        
<div id="header">
    <?php include 'header.php';?>
    </div> 
        
     <div id="page"> 
        
        <br />
        <div class="container" style="width:700px;">
             <h3 align="center">Book Cart</h3><br />
            
             
             <?php 
             include('dbconnection.php');    
             $books = "SELECT * FROM Books";  
             $result = $conn->query($books); 
             if($result->num_rows>0)
                 {

                    while($row = $result->fetch_assoc()) 
                    {
              ?>
              <div class="col-md-4">

                
                <form method="post" action="librarycart.php?action=add&book_id=<?php echo $row["book_id"]; ?>">
                  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                      <img src="<?php echo $row["image"];?>" style="height: 280px; width: 165px;" class="img-responsive"/><br />
                      <!--<h4 style="text-overflow: ellipsis;" class="text-info"><?php  $row["title"]; ?></h4> -->
                      <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                      <input type="text" name="quantity" class="form-control" value="1" />
                      <input type="hidden" name="hidden_title" value="<?php echo $row["title"]; ?>" />
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                    
                  </div>
                </form>
              </div>
              <?php
                    }

                 }
             ?>
             <div style="clear:both; margin-left:-200px;"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Title</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  

                           ?>
                           <tr>
                                <td><?php echo $values["item_title"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>$ <?php echo $values["item_price"]; ?></td>
                                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                <td><a href="librarycart.php?action=delete&book_id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                           </tr>
                           <?php

                           			$total = $total + ($values["item_quantity"] * $values["item_price"]);
                           		}
                           	?>
                           	<tr>
                           		<td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td> 
                            </tr>  
                          <?php  
                          }  
                          ?>  

                          

                            
                                             
                     </table>
                     <form action='https://www.paypal.com/cgi-bin/webscr' class="cart" method="post">

                              <input type="hidden" name="cmd" value="_xclick" />
                              <input type="hidden" name="business" value="konanboris@divinetwork.com" />
                              <input type="hidden" name="item_name" value="Book Order" />
                              <input type="hidden" name="item_quantity" value="1" />
                              <input type="hidden" name="amount" value="<?php echo $total; ?>" />
                              <input type="hidden" name="currency_code" value="USD" />
                              
                              
                              <input type="image" src='https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png' width='200' height='50' border="0" alt="PayPal Logo" />
                            


                              
                                
                              </form>
                     
                    

                </div>
         </div>
         <br />
         </div>  
    </body>
    

  
</html>
    
    
    
   