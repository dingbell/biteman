<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("search_rest_form.php", ["title" => "Search Restaurant"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
   
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["quote"]))
        {
            apologize("You must provide a restaurant's name.");
        }
        $result = CS50::query("SELECT * FROM restInfo WHERE Name LIKE ?", $_POST["quote"]);
        if($result === false)
        {
            apologize("Please provide a valid restaurant's name.");
        }
        else
        {
            //redirect("/");
           render("search_rest.php", [ "positions" => $result,"title" => "Restaurant Information"]);
           //render("quote.php", ["title" => "Restaurant Information"]);
        }
    }
?>
