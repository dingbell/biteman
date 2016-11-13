<form action="sell.php" method="post">
    <?php $rows = CS50::query("SELECT * FROM portfolios WHERE user_ID = ?", $_SESSION["id"]);
    if ($rows == false)
    { ?>
        <h1> Sorry!</h1>
        <p> Nothing to Sell</p>
        <?php }
    else {
    ?>
    <fieldset>
        <div class="form-group">
                <select class = "form-control" name = "symbol">
                    <option disabled="" selected="" value="">Symbol</option>
                        <?php foreach ($rows as $row): ?>
                        <option value = "<?= $row["symbol"]?>"> <?= $row["symbol"]?></option>
                        <?php endforeach ?>
                </select>        
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-sell"></span>
                Sell
            </button>
        </div>
    </fieldset>
    <?php } ?>
</form>
