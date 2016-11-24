<form action="view_order_rest.php" method="post">
    
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>Food</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Restaurant</th>
            <th>Barcode</th>
            <th>Status</th>
            <th>Confirm</th>
            <th>Cancel</th>
            
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
                echo "<td><bottom> <button class='btn btn-default' name='confirm' value=". $position["order_id"]." type='submit'> Confirm </button></td>
                       <td><bottom> <button class='btn btn-default' name='cancel' value=". $position["order_id"]." type='submit'> Cancel </button></td>"; 
            ?>
            
        </tr>
    
    <?php endforeach ?>
    </tbody>
</table>
</form>