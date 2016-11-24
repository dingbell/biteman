<form action="morder.php" method="post">
    <fieldset>
        <div>
            <?php
                $position = array();
                $rows= cs50::query("SELECT name,price,picture,id FROM food WHERE restid = ?", $result);
                echo "<table style='width:100%'>
                    <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>picture</th>
                    <th>quantity</th>   
                    </tr>";
                    foreach ($rows as $row):
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . "<img src= ". $row["picture"]. " height='50' >". "</td>";
                        echo " <td><select name=". $row['id']. ">
                              <option value='0'>0</option> 
                              <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                </select></td>";
                        echo "<td>"."<bottom> <button class='btn btn-default' name='morder' value=". $row["id"]." type='submit'> Make order </button></td>". "</td>";
                        echo "</tr>";
                    endforeach;
                echo"</table>";
            ?>
        </div>
        
    </fieldset>
</form>