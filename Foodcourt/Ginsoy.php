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

$query = "select * from restaurant";

mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

?>
       
<section id="menu">
        <h2 class="menu-title">Menu</h2>
        <section class="tabs-container">
            <section class="tabs">
                 <button class="tabHeader active-tab" data-tab = "5">ID</button>
                 <button class="tabHeader" data-tab = "6">Deals</button>
                 <button class="tabHeader" data-tab = "7">Deal_Price</button>
                 <button class="tabHeader" data-tab = "8">Appetizer</button>
                 <button class="tabHeader" data-tab = "9">Appetizer_Price</button>
                 <button class="tabHeader" data-tab = "9">MainCourse</button>
                 <button class="tabHeader" data-tab = "9">MainCourse_Price</button>
                 <button class="tabHeader" data-tab = "9">Desserts</button>
                 <button class="tabHeader" data-tab = "9">Desserts_Price</button>
                 <button class="tabHeader" data-tab = "9">Beverages</button>
                 <button class="tabHeader" data-tab = "9">Beverage_Price</button>

            </section>

<?php
            while ($rows = mysqli_fetch_assoc($result)) {
    ?>

    <?php echo $row['ID']; ?>
    <?php echo $row['Deals']; ?>
    <?php echo $row['Deal_Price']; ?>
    <?php echo $row['Appetizer']; ?>
    <?php echo $row['Appetizer_Price']; ?>
    <?php echo $row['MainCourse']; ?>
    <?php echo $row['MainCourse_Price']; ?>
    <?php echo $row['Desserts']; ?>
    <?php echo $row['Desserts_Price']; ?>
    <?php echo $row['Beverages']; ?>
    <?php echo $row['Beverage_Price']; ?>

    <?php
   }
   ?>

<script src="main.js"></script>
    <script src="tabs.js"></script>

</body>
</html>

