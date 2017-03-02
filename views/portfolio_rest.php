<table class = "table table-stripped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>Region</th>
            <th>Province</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Postcode</th>
        </tr>
    </thead>
    <tbody>
    

    <?php foreach ($positions as $position): ?>
    
        <tr>
            <td><?= $position["name"] ?></td>
            <td><?= $position["add1"] ?></td>
            <td><?= $position["add2"] ?></td>
            <td><?= $position["dist"] ?></td>
            <td><?= $position["province"] ?></td>
            <td><?= $position["latitude"] ?></td>
            <td><?= $position["longitude"] ?></td>
            <td><?= $position["post"] ?></td>
        </tr>
    
    <?php endforeach ?>
    </tbody>
</table>


