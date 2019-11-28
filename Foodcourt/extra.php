<th>  <button class="tabHeader" data-tab = "7">Deal_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "8">Appetizer</button> </th>
               <th>  <button class="tabHeader" data-tab = "9">Appetizer_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "10">MainCourse</button> </th>
               <th>  <button class="tabHeader" data-tab = "11">MainCourse_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "12">Desserts</button> </th>
               <th>  <button class="tabHeader" data-tab = "13">Desserts_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "14">Beverages</button> </th>
               <th>  <button class="tabHeader" data-tab = "15">Beverage_Price</button> </th>
               <th>  <button class="tabHeader" data-tab = "16">Action</button> </th>





               <td><?php echo $row['Deal_Price']; ?></td> 
          <td><?php echo $row['Appetizer'] ;?></td> 
          <td><?php echo $row['Appetizer_Price'] ;?></td> 
          <td><?php echo $row['MainCourse'] ;?></td> 
          <td><?php echo $row['MainCourse_Price']; ?></td> 
          <td><?php echo $row['Desserts'];?></td> 
          <td><?php echo $row['Desserts_Price']; ?></td> 
          <td><?php echo $row['Beverages']; ?></td> 
          <td><?php echo $row['Beverage_Price']; ?> </td>
          <td><input type = "submit"  name = "submit" value = "Add to Cart"></td>