<form action="sell.php" method="post">
    <fieldset>
        <div>
            <?php
                $rows= cs50::query("SELECT name,price,picture,id FROM food WHERE restid = ?", $_SESSION["id"]);
                echo "<table style='width:100%'>
                    <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>picture</th>
                    </tr>";
                    foreach ($rows as $row):
                        echo "<td>".$row["name"]."</td>";
                         echo "<td>".$row["price"]."</td>";
                        echo "<td>" . "<img src= ".$row["picture"]." height='50' >". "</td>";
                         echo "<td><bottom> <button class='btn btn-default' name='edit' value=".$row["id"]." type='submit'> Edit </button>
                         <bottom> <button class='btn btn-default' name='delet' value=".$row["id"]." type='submit'> delet </button></td>";
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
