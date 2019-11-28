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
               <th>  <button class="tabHeader" data-tab = "8">Appetizer</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">Appetizer_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">MainCourse</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">MainCourse_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">Desserts</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">Desserts_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">Beverages</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">Beverage_Price</button> </th>

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
         
          <td><?php echo $row['Deals']; ?></td> 
          <td><?php echo $row['Deal_Price']; ?></td> 
          <td><?php echo $row['Appetizer'] ;?></td> 
          <td><?php echo $row['Appetizer_Price'] ;?></td> 
          <td><?php echo $row['MainCourse'] ;?></td> 
          <td><?php echo $row['MainCourse_Price']; ?></td> 
          <td><?php echo $row['Desserts'];?></td> 
          <td><?php echo $row['Desserts_Price']; ?></td> 
          <td><?php echo $row['Beverages']; ?></td> 
          <td><?php echo $row['Beverage_Price']; ?> </td>
          </tr>  
<?php  
          }

        }
        $result2 = mysqli_query($db, "select * from menu");
      
    ?>
</table>
</div>
    

<script src="main.js"></script>
<script src="tabs.js"></script>

</body>
</html>

