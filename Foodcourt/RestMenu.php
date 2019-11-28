<?php 
function connect(){
 $db = mysqli_connect('localhost', 'root', '', 'mysql');

 if(!$db){
         die("failed to connect");
 }

 return $db;

}

    ?>



<html>

<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="tabs.css">
</head> 

<body>

<a href="ind.php" class="Home">Go to Home</a>

<?php



 /* if(isset($_POST['restmenu']))
  {

 $restaurantID = $_POST['restaurantID'];
 mysqli_query($db, "Select * from 'menu' where restaurantID = '$restaurantID' ");
 //mysqli_query($db, $query) or die('Error querying database.');

 

} 
$result = mysqli_query($db, "Select * from menu");

/*
$query= "Select * from menu";

mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query); */

?>


        <section id="menu">
        <div style="overflow-x:auto;">
                <table align = "center" style="width:100%; height:100%;">
                <tr>
                <th colspan ="4"> <h2 class="menu-title">Menu</h2></th>
                </tr>
        
        <section class="tabs-container">
                <section class="tabs">
       
                <t>
               
               <th>  <button class="tabHeader" data-tab = "6">Deals</button> </th>
               <th>  <button class="tabHeader" data-tab = "7">Deal_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "16">Quantity</button> </th>
               <th>  <button class="tabHeader" data-tab = "16">Action</button> </th>
               

            </section>
            </t>

<?php

//function get_menu(){
        $db = connect();
        
        if(isset($_POST['submit'])){

             /*  $query = "select * from restaurant  ";

                //mysqli_query($db, $query) or die('Error querying database.');
            
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result); 
               // $restaurantID=($_POST['restaurantID']); */
                $query2 = "select * From menu ";
                //where 'menuID' = ".$row["restaurantID"] ;
        
                $result2 = mysqli_query($db, $query2);
        
             //   $row = mysqli_fetch_array($result2);
        
           while ($row = mysqli_fetch_array($result2)) {
          ?>
          <tr>
         
         
          <form method = "post" action = "cart.php?add&menuID= <?php echo $row["menuID"]; ?>" >
          
          <td><?php echo $row["Deals"]; ?></td> 
          <td><?php echo $row["Deal_Price"]; ?></td> 
          <td><b><input type="text" name="quantity" class="form-control" value="1"></b></td>
          <td><b><input type = "submit"  name = "cart" value = "Add to Cart" ></b></td>
          <input type="hidden" name="hidden_name" value=" <?php echo $row['Deals']; ?>" >
          <input type="hidden" name="hidden_price" value=" <?php echo $row['Deal_Price']; ?>" >
          </tr>  
<?php  
          }

        }
      
    ?>



    <t>
        
        <th>  <button class="tabHeader" data-tab = "8">Appetizer</button> </th>
        <th>  <button class="tabHeader" data-tab = "9">Appetizer_Price</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Quantity</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Action</button> </th>
    </t>


<?php

        $db = connect();
        
        if(isset($_POST['submit'])){

                $query2 = "select * From menu ";
                
                $result2 = mysqli_query($db, $query2);
        
           while ($row = mysqli_fetch_array($result2)) {
          ?>
          <tr>
          <form method = "post" action = "cart.php?add&menuID= <?php echo $row["menuID"]; ?>" >
          <td><?php echo $row['Appetizer'] ;?></td> 
          <td><?php echo $row['Appetizer_Price'] ;?></td> 
          <td><b><input type="text" name="quantity" class="form-control" value="1"></b></td>
          <td><b><input type = "submit"  name = "cart" value = "Add to Cart" ></b></td>
          <input type="hidden" name="hidden_name" value=" <?php echo $row['Appetizer']; ?>" >
          <input type="hidden" name="hidden_price" value=" <?php echo $row['Appetizer_Price']; ?>" >
          </tr>  
<?php  
          }

        }
      
    ?>



    <t>
          
        <th>  <button class="tabHeader" data-tab = "10">MainCourse</button> </th>
        <th>  <button class="tabHeader" data-tab = "11">MainCourse_Price</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Quantity</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Action</button> </th>
    </t>


<?php

        $db = connect();
        
        if(isset($_POST['submit'])){

                $query2 = "select * From menu ";
                
                $result2 = mysqli_query($db, $query2);
        
           while ($row = mysqli_fetch_array($result2)) {
          ?>
          <tr>
          <form method = "post" action = "cart.php?add&menuID= <?php echo $row["menuID"]; ?>" >
          <td><?php echo $row['MainCourse'] ;?></td> 
          <td><?php echo $row['MainCourse_Price']; ?></td>
          <td><b><input type="text" name="quantity" class="form-control" value="1"></b></td>
          <td><b><input type = "submit"  name = "cart" value = "Add to Cart" ></b></td>
          <input type="hidden" name="hidden_name" value=" <?php echo $row['MainCourse']; ?>" >
          <input type="hidden" name="hidden_price" value=" <?php echo $row['MainCourse_Price']; ?>" >
          </tr>  
<?php  
          }

        }
      
    ?>
    


    <t>
        
        <th>  <button class="tabHeader" data-tab = "12">Desserts</button> </th>
        <th>  <button class="tabHeader" data-tab = "13">Desserts_Price</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Quantity</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Action</button> </th>
    </t>


<?php

        $db = connect();
        
        if(isset($_POST['submit'])){

                $query2 = "select * From menu ";
                
                $result2 = mysqli_query($db, $query2);
        
           while ($row = mysqli_fetch_array($result2)) {
          ?>
          <tr>
          <form method = "post" action = "cart.php?add&menuID= <?php echo $row["menuID"]; ?>" >
          <td><?php echo $row['Desserts'];?></td> 
          <td><?php echo $row['Desserts_Price']; ?></td> 
          <td><b><input type="text" name="quantity" class="form-control" value="1"></b></td>
          <td><b><input type = "submit"  name = "cart" value = "Add to Cart" ></b></td>
          <input type="hidden" name="hidden_name" value=" <?php echo $row['Desserts']; ?>" >
          <input type="hidden" name="hidden_price" value=" <?php echo $row['Desserts_Price']; ?>" >
          </tr>  
<?php  
          }

        }
      
    ?>


     <t> 
        
        <th>  <button class="tabHeader" data-tab = "14">Beverages</button> </th>
        <th>  <button class="tabHeader" data-tab = "15">Beverage_Price</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Quantity</button> </th>
        <th>  <button class="tabHeader" data-tab = "16">Action</button> </th>
    </t>


<?php

        $db = connect();
        
        if(isset($_POST['submit'])){

                $query2 = "select * From menu ";
                
                $result2 = mysqli_query($db, $query2);
        
           while ($row = mysqli_fetch_array($result2)) {
          ?>
          <tr>
          <form method = "post" action = "cart.php?add&menuID= <?php echo $row["menuID"]; ?>" >
          <td><?php echo $row['Beverages']; ?></td> 
          <td><?php echo $row['Beverage_Price']; ?> </td>
          <td><b><input type="text" name="quantity" class="form-control" value="1"></b></td>
          <td><b><input type = "submit"  name = "cart" value = "Add to Cart" ></b></td>
          <input type="hidden" name="hidden_name" value=" <?php echo $row['Beverages']; ?>" >
          <input type="hidden" name="hidden_price" value=" <?php echo $row['Beverage_Price']; ?>" >
          </tr>  
<?php  
          }

        }
      
    ?>


</table>
</div>

    

<script src="main.js"></script>
<script src="tabs.js"></script>

</body>
</html>

