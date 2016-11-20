<form action="view_menu.php" method="post">
<p>
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>FoodName</th>
            <th>RestName</th>
            <th>Price</th>
            <th>picture</th>
            <th>To restaurant</th>
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
        //<button class="btn btn-default" type="submit">
        //<span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
           //     Enter
            //</button>
        echo "<td>" . "<button class='btn btn-default' type='submit' name='rest_id' value='". $row['id'].">.<span aria-hidden='true' class='glyphicon glyphicon-log-in'></span> Redirect </button>"."</td>";
        echo "</tr>";
    
        endforeach; 
    ?>
    
    
    
    
    </tbody>
    </table>

</p>
