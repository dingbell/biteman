<form action="quote.php" method="post">
    <fieldset>
        <tbody>
    <table style="width:100%">
    
        <div class="form-group">
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
              <?php endforeach ?>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                Get Restaurant
            </button>
        </div>
    </tbody>
    </fieldset>
</form>

