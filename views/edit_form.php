<form action="quote.php" method="post" style="padding-left: 300px">
    <tbody>
        <fieldset>
        <table style="width:100%; padding-left: 300px">
        <div class="form-group">
            <?php $rows= cs50::query("SELECT name,price, FROM food WHERE id = ?", $_SESSION["foodid"]); ?>
            <tr>
                <td>Name</td>
                <td><input  autofocus class="form-control" name="name" placeholder='<?= $rows["name"] ?>' type="text"/></td>
            </tr>
            <tr>                
                <td>Address1 </td>
                <td><input  autofocus class="form-control" name="add1" placeholder='<?= $rows["add1"] ?>' type="text"/></td>             
            </tr>
            </div>
        </table>
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Edit
                </button>
         </fieldset>
    </tbody>
    
</form>