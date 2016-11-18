        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- http://1000hz.github.io/bootstrap-validator/ -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

        <form action="register.php" data-toggle="validator" id="registration" method="post">
                <fieldset>
        <div class="form-group">
            <label for="username" class="control-label">Name</label>
            <input autocomplete="off" autofocus type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <input type="email" class="form-control" name="inputEmail" placeholder="Email" data-error="Sorry, The email address is invalid" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" data-minlength="6" class="form-control" name="password" placeholder="Password" required>
            <div class="help-block">Minimum of 6 characters</div>
        </div>
        <div class="form-group">
            <label for="confirmation" class="control-label">Confirmation</label>
            <input type="password" class="form-control" name="confirmation" data-match="#password" data-match-error="Sorry, the confirmation and password must be the same" placeholder="Confirmation" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <div class="radio">
                <label>
                    <input type="radio" name="cus-type" required>
                    Customer
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="cus-type" required>
                    Restaurant
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a>
</div>