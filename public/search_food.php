<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("search_food_form.php", ["title" => "Search Food"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
   
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["search"]))
        {
            apologize("You must provide a dish.");
        }
        $result = CS50::query("SELECT food.name,restInfo.Name as restName,price,picture FROM restInfo INNER JOIN food ON food.restid= restInfo.id WHERE food.name LIKE ?", $_POST["search"]);
        if($result === false)
        {
            apologize("Please provide a valid dish.");
        }
        else
        {
            render("search_food.php", [ "positions" => $result,"title" => "Restaurant Information"]);
        }
    }
?>

