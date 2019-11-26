<?php 
 $db = mysqli_connect('localhost','root','','mysql')

?>


<html>

<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="tabs.css">
</head> 

<body>

<a href="ind.php" class="Home">Go to Home</a>

<?php

$query= "Select * from menu";

mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

?>


<section id="menu">
<table align = "center" border = "1px" style="width:600px; line-height:40px;">
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
           while ($row = mysqli_fetch_array($result)) {
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
      
    ?>
</table>
    

<script src="main.js"></script>
<script src="tabs.js"></script>

</body>
</html>

