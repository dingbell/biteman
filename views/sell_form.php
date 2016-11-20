<form action="sell.php" method="post">
    <tbody>
        <fieldset>
        <table style="width:100%;float:center">
        <div class="form-group">
           <?php foreach ($positions as $position): ?>
            <tr>
                <td>name</td>
                <td><input  autofocus class="form-control" name="name"  type="text"/></td>
            </tr>
            <tr>                
                <td>price </td>
                <td><input  autofocus class="form-control" name="price"  type="text"/></td>             
            </tr>
       </table>
       </div>
       <?php endforeach ?>
       <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Add
                </button>
         </fieldset>
    </tbody>
    
</form>