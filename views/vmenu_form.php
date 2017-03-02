<form action="vmenu.php" method="post" style="padding-left: 300px" >
    <fieldset>
        <div>
            <?php
                $rows= cs50::query("SELECT name,price,picture FROM food WHERE restid = ?", $_SESSION["id"]);
                echo "<table style='width:100%'>
                    <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Picture</th>
                    </tr>";
                    foreach ($rows as $row):
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . "<img src= ".$row["picture"]." height='50' >". "</td>";
                       
   /*                     echo " <td><select name='cars'>
                              <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                </select></td>";
    */                   echo "</tr>";
                    endforeach;
                echo"</table>"
            ?>
        </div>
    </fieldset>
</form>
