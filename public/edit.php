<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("edit_form.php", ["foodid"=>$_SESSION["foodid"],"title" => "edit"]);
    }
     else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $result = CS50::query("UPDATE food SET name = ?, price = ? WHERE id = ?", $_POST["name"], $_POST["price"], $_SESSION["foodid"]);
        $_SESSION["foodid"]='0';
        
    }