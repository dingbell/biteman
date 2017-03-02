<form action="addmenu.php" method="post" style="padding-left: 400px">
    <tbody>
        <fieldset>
        <table style="width:100%;float:center">
        <div class="form-group">
           <?php foreach ($positions as $position): ?>
            <tr>
                <th>Name</th>
                <td><input  autofocus class="form-control" name="name"  type="text"/></td>
            </tr>
            <tr>                
                <th>Price </th>
                <td><input  autofocus class="form-control" name="price"  type="text"/></td>             
            </tr>
             <tr>                
                <th>Picture </th>
                <td><input  autofocus class="form-control" name="picture"  type="text"/></td>             
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