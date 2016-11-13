<form action="login.php" method="post">
    <fieldset>
        <p>
            <input class="w3-radio" type="radio" name="cus-type" value="customer">
            <label class="w3-validate">Customer</label>
        </p>
        <p>
            <input class="w3-radio" type="radio" name="cus-type" value="restaurant">
            <label class="w3-validate">Restaurant</label>
        </p>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Enter
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="register.php">register</a> for an account
</div>
