<?php 
function connect(){
 $db = mysqli_connect('localhost', 'root', '', 'mysql');

 if(!$db){
         die("failed to connect");
 }

 return $db;

}


if(isset($_POST["cart"])){

    if(isset($_SESSION["menu_cart"])){
        $item_array_id = array_column($_SESSION["menu_cart"], "menuID");
        if(!in_array($_GET["menuID"], $item_array_id)){
            $count = count($_SESSION["menu_cart"]);
            $item_array= array(
                'menuID' => $_GET["menuID"],
                'name' => $_POST["hidden_name"],
                'price' => $_POST["hidden_price"],
                'quantity' => $_POST["quantity"]
        
            );
            $_SESSION["menu_cart"][$count] = $item_array;
             
        }
        else{
            echo '<script>alert("Item Already added")</script>' ;
            echo '<script>window.location="cart.php" </script>';
        }

    }

    else{
    $item_array= array(
        'menuID' => $_GET["menuID"],
        'name' => $_POST["hidden_name"],
        'price' => $_POST["hidden_price"],
        'quantity' => $_POST["quantity"]

    );
    $_SESSION["menu_cart"][0] = $item_array;
}
}

if(isset($_GET["action"])){
    if($_GET["action"]=="delete"){
        foreach($_SESSION["menu_cart"] as $keys=> $values)
        {
            
            if($values["menuID"] == $_GET["menuID"])  
            {  
                 unset($_SESSION["shopping_cart"][$keys]);  
                 echo '<script>alert("Item Removed")</script>';  
                 echo '<script>window.location="cart.php"</script>';  
            }  

        }
    }
}

?>


<html>

<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="tabs.css">
</head> 

<body>

<a href="ind.php" class="Home">Go to Home</a>

<section id="cart">
        <div style="overflow-x:auto;">
                <table align = "center" style="width:100%; height:100%;">
                <tr>
                <th colspan ="4"> <h2 class="cart-title">Order Detail</h2></th>
                </tr>
                          <t>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </t>  
                          <?php   
                          if(!empty($_SESSION["menu_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["menu_cart"] as $keys => $values)  
                               {  
                          ?>  

                <tr>  
                        <td><?php echo $values["name"]; ?></td>  
                        <td><?php echo $values["quantity"]; ?></td>  
                        <td>$ <?php echo $values["price"]; ?></td>  
                        <td>$ <?php echo number_format($values["quantity"] * $values["price"], 2); ?></td>  
                        <td><b href="cart.php?action=delete&menuID<?php echo $values["menuID"]; ?>"><span class="text-danger">Remove</span></b></td>  
                          </tr>  

                          <?php  
                                    $total = $total + ($values["quantity"] * $values["price"]);  
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
                </div>  
           </div>  
           <br />  







            
        


    

<script src="main.js"></script>
<script src="tabs.js"></script>

</body>
</html>
