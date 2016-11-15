<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "Get Quote"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["quote"]))
        {
            apologize("You must provide the quote symbol.");
        }
        $stock = lookup($_POST["quote"]);
        if($stock === false)
        {
            apologize("Please provide a valid symbol.");
        }
        else
        {
            render("quote.php", $stock);
        }
        
    }

?>
