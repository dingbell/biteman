<head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<p>
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>FoodName</th>
            <th>RestName</th>
            <th>Price</th>
            <th>picture</th>
            <th>choose</th>
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
        echo "<td>" . "<button class='btn btn-default' data-target='#myModal' data-toggle='modal'>Pick</button>
                        <div aria-labelledby='myModalLabel' class='modal fade' id='myModal' role='dialog' tabindex='-1'>
                            <div class='modal-dialog' role='documen'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button aria-label='Close' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
                                            <h4 class='modal-title' id='myModalLabel'>shopping cart</h4>
                                    </div>
                                    <div class='modal-body'>
                                        You have succesfully choose your food!
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                </div>
                            </div>
                        </div>". 
                "</td>";                
            
        echo "</tr>";
    
        endforeach; 
    ?>
    
    </tbody>
    </table>

</p>


