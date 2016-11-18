<form action="c_menu.php" method="post">
    <fieldset>
        <div>
            <?php
                $rows= cs50::query("SELECT name,price,picture FROM food WHERE restid = ?", $_SESSION["id"]);
                echo "<table style='width:100%'>
                    <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>picture</th>
                    </tr>";
                    foreach ($rows as $row):
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . "<img src= ".$row["picture"]." height='50' >". "</td>";
                        echo "<td>" . "<select name='quantity'>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>
                              <option value='4'>4</option>
                              </select></td>";
                       
                       
                        
                    endforeach;
                     echo "<button type='button' onclick='location('')'>Make order</button>";
                echo"</table>"
            ?>
        </div>
    </fieldset>
</form>