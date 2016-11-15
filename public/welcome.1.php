<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login_form.php", ["title" => "Welcome"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["user-type"]))
        {
            apologize("You must select your user-type.");
        }
        else
        {
            redirect("login.php");
        }
        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
