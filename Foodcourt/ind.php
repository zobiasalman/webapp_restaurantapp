<?php 
 $db = mysqli_connect('localhost','root','','mysql')

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Court App</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="tabs.css">
</head>
<body>
    <main>
        <section id="landing-page">
            <div class="navigation-slider">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <header class ="title-background">
                <h2 class="title">Food On The Go</h2>
            </header>

 <?php

$query = "select * from restaurant  ";

mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

?>
   </section>
        <section class="navigation-slider-section ">
            <button class="close-navigation-slider">X</button> 
            <section class = "nav-link-container">
                <ul style="list-style-type:none">
                    <li><a class="nav-links" href="#restaurants">Restaurants</a></li>
    
                    <li><a class="nav-links" href="#restaurant-info">Restaurant Information</a></li>
                </ul>
            </section>
        </section>



        <section id="listing">
                <h2 class="listing-title">Restaurants</h2>
                <section class="tabs-container">
                    <section class="tabs">
                         <button class="tabHeader active-tab" data-tab = "1">Food Category</button>
                         <button class="tabHeader" data-tab = "2">Budget</button>
                         <button class="tabHeader" data-tab = "3">Card Discounts</button>
                         <button class="tabHeader" data-tab = "4">Rating</button>
                         
                    </section>
    
                    <section id="tabSection-1" class="tabSection show-tab">
                           <p> <button onclick = "mybutton_continental_italian_res()"> 1. Continental <span class="menu-price"></span> </button></p>
                           <p><button onclick = "mybutton_continental_italian_res()"> 2. Italian <span class="menu-price"></span></button></p>
                           <p><button onclick = "mybutton_chinese_res()"> 3. Chinese <span class="menu-price"></span> </button></p>
                           <p><button onclick = "mybutton_pakistani_res()"> 4. Pakistani <span class="menu-price"></span></button></p>
                           <p> <button onclick = "mybutton_fastfood_res()"> 5. Fast food <span class="menu-price"></span> </button></p>
                            
                    </section>
    
    
                    <section id="tabSection-2" class="tabSection hide-tab">
                            <p>1. High to Low<span class="menu-price"></span></p>
                            <p>2. Low to High<span class="menu-price"></span></p>
                            
    
                    </section>
                    <section id="tabSection-3"class="tabSection hide-tab">
                            <p>1. HBL <span class="menu-price"></span></p>
                            <p>2. Habib Metro<span class="menu-price"></span></p>
                            <p>3. Bank Alfalah<span class="menu-price"></span></p>
                            <p>4. Faysal Bank<span class="menu-price"></span></p>
                            <p>5. Others<span class="menu-price"></span></p>
    
                            
            </section>
                    
                    <section id="tabSection-4" class="tabSection hide-tab">
                            <p>1. Excellent <span class="menu-price"></span></p>
                            <p>2. Good<span class="menu-price"></span></p>
                            <p>3. Satisfactory<span class="menu-price"></span></p>
                            <p>4. Poor<span class="menu-price"></span></p>
                            
                            
                    </section>

                
                </section>
            </section>




            
            <section id="restaurants">
<table align = "center" border = "1px" style="width:600px; line-height:40px;">
<tr>
        <th colspan ="4"> <h2 class="menu-title">Restaurants</h2></th>
</tr>
                       
<section class="tabs-container">
    <section class="tabs">
 <t>
               <th>  <button class="tabHeader active-tab" data-tab = "5">RestaurantID</button> </th>
               <th>  <button class="tabHeader" data-tab = "6" name = "restmenu">RestaurantName</button> </th>
 </section>
</t>


        </section>
                </section>

 <?php

    while ($row = mysqli_fetch_array($result)) {
        ?>

        <tr>
        <td><?php echo $row['restaurantID']; ?></td>
        <td><a href = "Restmenu.php"><?php echo $row['RestaurantName']; ?></a></td> 
        </tr>  

<?php  
     //if(isset($_POST['restmenu']))
   /*  {

    $restaurantID = $_GET['restaurantID'];
    $query2 = "Select * from 'menu' where restaurantID = '$restaurantID' ";
    mysqli_query($db, $query2) or die('Error querying database.');

    $result2 = mysqli_query($db, $query2);

 } */  
 }
    
  ?>


 
  
 </table>                          
                       
    
    




       

        <section id= "restaurant-info">
            <section class="info-container">
                <section class="address-content">
                        <h2 class="restaurant-info-title">Address</h2>
                        <p class="address">Food Court Dolmen Mall</p>
                        <p class="address">Karachi, Pakistan</p>
            
                    </section>
                    <section class="business-hours">
                            <h2 class="restaurant-info-title">Business Hours</h2>
                            <p class="hours">Monday-Friday: 11am - 10pm</p>
                            <p class="hours">Saturday-Sunday: 10am - 11pm</p>
                    </section>
                    <section class="contact-content">
                            <h2 class="restaurant-info-title">Contact Us</h2>
                            <p class="phone">0300-1234567</p>
                            <p class="phone">111-123123</p>
                    </section>
            </section>
          
        </section>

    </main>
    <script src="main.js"></script>
    <script src="tabs.js"></script>
</body>
</html>