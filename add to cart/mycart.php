<?php
 include("header.php"); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12  border rounded bg-light mt-5"> 
                <h1> MY CART </h1>
</div>        
  <div class=col-lg-9>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>  
      <th scope="col">TOTAL</th>     
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
</div>     

    <?php 
    /* $total=0; */
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as  $key => $value)
    {
      //print_r($value);
      $sr=$key+1;
   /* $total=$total+$value['Price'];*/   
      echo"
         <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
            <td>
            <form action='manage_cart.php' method='POST'>          
            <input class='text-centre iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]'> 
            </form>
            </td>           
            <td class='itotal'></td>
            <td>
            <form action='manage_cart.php' method='POST'>
            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>            
            </form >
            </td>
            </tr>
           <!-- <form action='manage_cart.php' method='post'>
             <input class='text-centre iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
           
            </form>
            </td>
                       
            <form action='manage_cart.php' method='post'>
            <button name='Remove_Item' class='btn1   btn-outline-danger'>REMOVE</button>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>
            </td>-->
       
        ";
      
    }        
  } 
    ?>   
  </tbody>
</table>
</div>
            <div class="col-lg-3"> 
              <div class="border bg-light rounded p-4">
              <h4>  Grand Total:</h4>            
              <h5 class="text-right" id="gtotal"><!--<?php echo $total ?>--></h5>
              <br>
              <?php
               if(isset($_SESSION['cart']) &&  count($_SESSION['cart'])>0)
               {
              ?>
              <form action="purchase.php" method="post">              
              <div class="form-group">
              <label>FULL NAME</label>
              <input type="text"  name="full_name" class="form-control" required>
           </div> 
           <div class="form-group">
              <label>PHONE NO</label>
              <input type="number" name="phone_no" class="form-control" required>
           </div>  
           <div class="form-group">
              <label>ADDRESS</label>
              <input type="text" name="address" class="form-control" required>
           </div>          
             <div class="form-check">
               <input class="form-check-input" type="radio"  name="pay_mode" value="cod" id="flexCheckChecked" checked>
               <label class="form-check-label" for="flexCheckChecked">
                 CASH ON DELIVERY
               </label>
             </div>
             <br>
              <button class="btn  btn-sm btn-primary btn-block" name="purchase"> MAKE PURCHASE</button>  
            </form>
            <?php
               }
              ?>      
             </div>   
           </div>         
          </div>
        </div>
    
    <script>
      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');

      function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);

          /* price 650 quantity 1 gt=(650*1)
             
             price 750 quantity 2 gt=650+ (750*2) gt===2150

             price 850 quantity 1 gt=2150+ (850*1) gt===3000
             */
        }
        gtotal.innerText=gt;
      }

      subTotal();

    </script>
   </form>
  </div>
 </div>
      
</body>
</html>