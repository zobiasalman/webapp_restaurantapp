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



function get_menu(){
        $db = connect();
    
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        
        
        
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
        }

        //}
      
    ?>