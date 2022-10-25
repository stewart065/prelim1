<?php
    require_once "dbconnect.php";
?>
<body>
   <style>
                table,th,td{
                    
                    padding: 10px;
                    margin: 0 auto;
                    margin-bottom: 50px ;
                }
                form{
                    width: 600px;
                    height: 700px;
                     border: 1px solid;
                     padding: 10px;
                    border-radius: 20px;
                     background: green;
                }
                body{
   
                        display: flex;
                        justify-content: center;
                         height: 96vh;
                    }
                *{
                     font-family: sans-serif;
                    box-sizing: border-box;
                 }

   </style>
 <form action="productadd.php">
<table>
<button type="Add">Add Product</button>
    <tr>
        
    <th>Category name</th>
        <th>Name</th>


        <th>Price</th>

        <th>Units</th>

        <th>action</th>
       
    </tr>
        

    <?php
        $sql = "SELECT category.category as category, product.id, product.name, product.price,product.unit FROM category INNER JOIN product ON category.id = product.category;";
        $result = $conn->query($sql); 
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
             
            echo "<td>$row->category</td>";
            echo "<td>$row->name</td>";
            echo "<td>$row->price</td>";
            echo "<td>$row->unit</td>";
            echo " <td><a href='updatepro.php?id=$row->id'>Update</a></td>";
            echo " <td><a href='php?id=<?php echo $row->id'>Delete</a></td>";
            echo"</tr>";
        }
      
    ?>
    
     
</table>
</form>
    </body>