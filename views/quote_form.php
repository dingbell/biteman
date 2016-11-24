<form action="quote.php" method="post" style="padding-left: 300px">
    <tbody>
        <fieldset>
        <table style="width:100%">
            <?php 
            if (empty($positions))
            {
                $position = [];
                $position["name"] = "";
                $position["add1"] = "";
                $position["add2"] = "";
                $position["dist"] = "";
                $position["province"] = "";
                $position["latitude"] = "";
                $position["longitude"] = "";
                $position["post"] = "";
                $positions = [$position];
            }
            ?>
            <?php foreach ($positions as $position): ?>
            <tr>
                <td>Name</td>
                <td><input  autofocus class="form-control" name="name" placeholder='<?= $position["name"] ?>' type="text"/></td>
            </tr>
            <tr>                
                <td>Address1 </td>
                <td><input  autofocus class="form-control" name="add1" placeholder='<?= $position["add1"] ?>' type="text"/></td>             
            </tr>
             <tr>
                <td>Address2</td>
                <td><input  autofocus class="form-control" name="add2" placeholder= "<?= $position["add2"] ?>" type="text"/></td>
            </tr>
             <tr>
                <td>Region</td>
                <td><input  autofocus class="form-control" name="dist" placeholder= "<?= $position["dist"] ?>" type="text"/></td>
            </tr>
             <tr>
                <td>Province</td>
                <td><input  autofocus class="form-control" name="prov" placeholder= "<?= $position["province"] ?>" type="text"/></td>
            </tr>
             <tr>
                <td>Latitude</td>
                <td><input  autofocus class="form-control" name="x" placeholder= "<?= $position["latitude"] ?>" type="text"/></td>
            </tr>
             <tr>
                <td>Longitude</td>
                <td><input  autofocus class="form-control" name="y" placeholder= "<?= $position["longitude"] ?>" type="text"/></td>
            </tr>
             <tr>
                <td>Postcode</td>
                <td><input  autofocus class="form-control" name="post" placeholder= "<?= $position["post"] ?>" type="text"/></td>
            </tr>
       </table>
       </div>
       <?php endforeach ?>
       <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Edit
                </button>
         </fieldset>
    </tbody>
    
</form>

