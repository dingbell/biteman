<p>
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>Region</th>
            <th>Province</th>
            <th>Postcode</th>
        </tr>
    </thead>
    <tbody>
    

    <?php foreach ($positions as $position): ?>
    
        <tr>
            <td><?= $position["Name"] ?></td>
            <td><?= $position["Add1"] ?></td>
            <td><?= $position["Add2"] ?></td>
            <td><?= $position["Region"] ?></td>
            <td><?= $position["Prov"] ?></td>
            <td><?= $position["Postcode"] ?></td>
        </tr>
    
    <?php endforeach ?>
    </tbody>
</table>

</p>

