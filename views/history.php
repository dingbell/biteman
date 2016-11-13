<table class = "table table-stripped">
    <thead>
        <tr>
            <th>Transaction</th>
            <th>Date/Time</th>
            <th>Symbol</th>
            <th>Shares</th>
            <th>Prices</th>
        </tr>
    </thead>
    <tbody>
    <?php $positions = CS50::query("SELECT * FROM transaction WHERE user_id = ?", $_SESSION["id"]); ?>    
    <?php foreach ($positions as $position): ?>
    
        <tr>
            <td><?= $position["transaction"] ?></td>
            <td><?= date($position["time"]) ?></td>
            <td><?= $position["symbol"] ?></td>
            <td><?= $position["shares"] ?></td>
            <td><?= number_format($position["price"],2) ?></td>
        </tr>
    
    <?php endforeach ?>
    </tbody>
</table>


