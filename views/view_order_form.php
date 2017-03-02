<form action="make_order.php" method="post">
    
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>Food</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Restaurant</th>
            <th>Barcode</th>
            <th>Status</th>
            
        </tr>
    </thead>
    <tbody>
    

    <?php foreach ($positions as $position): ?>
    
        <tr>
            <td><?= $position["name"] ?></td>
            <td><?= $position["quantity"] ?></td>
            <td><?= $position["price"] ?></td>
            <td><?= $position["Name"] ?></td>
            <td><?= $position["barcode"] ?></td>
            <?php 
                if ($position["status"] == 0)
                {
                    echo "<td>"."Preparing"."</td>";
                }
                elseif ($position["status"] == 1)
                {
                    echo "<td>"."Ready"."</td>";
                }
            ?>
            
        </tr>
    
    <?php endforeach ?>
    </tbody>
</table>
</form>