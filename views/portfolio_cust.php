<table class = "table table-stripped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Telephone</th>
        </tr>
    </thead>
    <tbody>
    

    <?php foreach ($positions as $position): ?>
    
        <tr>
            <td><?= $position["name"] ?></td>
            <td><?= $position["phone"] ?></td>
        </tr>
    
    <?php endforeach ?>
    </tbody>
</table>


