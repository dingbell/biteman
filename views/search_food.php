<p>
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>FoodName</th>
            <th>RestName</th>
            <th>Price</th>
            <th>picture</th>
        </tr>
    </thead>
    <tbody>
    

    <?php 
    foreach ($positions as $row): 
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['restName'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . "<img src= ".$row["picture"]." height='50' >". "</td>";
        echo "</tr>";
    
        endforeach; 
    ?>
    
    
    
    
    </tbody>
    </table>

</p>
