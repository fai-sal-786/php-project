<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
  <h1> WELCOME TO WEBSITE WORLD</h1>

  <?php print_r($_SESSION['cart']) ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
             <form action="manage_cart.php" method="post">
              <div class="card">
               <img src="images/bag.jpg" width=200px height=200px class="card-img-top">
                <div class="card-body text-centre">
                 <h5 class="card-title">BAG 1</h5>
                 <p class="card-text">PRICE: RS 1500.</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">ADD TO CART</button>
               <input type="hidden" name="Item_Name" value="bag 1">
               <input type="hidden" name="Price" value="1500">
             </div>
           </div>
       </form>          
</div>   
        
   
      
  
            <div class="col-lg-3">
             <form action="manage_cart.php" method="post">
              <div class="card">
               <img src="images/bag1.jpg" width=200px height=200px class="card-img-top">
                <div class="card-body text-centre">
                 <h5 class="card-title">BAG 2</h5>
                 <p class="card-text">PRICE: RS 1600.</p>
               <button type="submit"name="Add_To_Cart"  class="btn btn-info">ADD TO CART</button>
               <input type="hidden" name="Item_Name" value="bag 2">
               <input type="hidden" name="Price" value="1600">
             </div>
           </div>          
         </form>
</div>
   
   
    <div class="col-lg-3">
             <form action="manage_cart.php" method="post">
              <div class="card">
               <img src="images/bag2.jpg"width=200px height=200px class="card-img-top">
                <div class="card-body text-centre">
                 <h5 class="card-title">BAG 3</h5>
                 <p class="card-text">PRICE: RS 1700.</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">ADD TO CART</button>
               <input type="hidden" name="Item_Name" value="bag 3">
               <input type="hidden" name="Price" value="1700">
             </div>
           </div>          
      </form>
   </div>
    
    <div class="col-lg-3">
             <form action="manage_cart.php" method="post">
              <div class="card">
               <img src="images/bag3.jpg" width=200px height=200px class="card-img-top">
                <div class="card-body text-centre">
                 <h5 class="card-title">BAG 4</h5>
                 <p class="card-text">PRICE: RS 1800.</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">ADD TO CART</button>
               <input type="hidden" name="Item_Name" value="bag 4">
               <input type="hidden" name="Price" value="1800">
             </div>
           </div>          
     </form>
   </div>
             
   </div>
 </div>
</body>
</html>