<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["positions" => $_SESSION["positions"], "title" => "Get Quote"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $positions = $_SESSION["positions"];
        // validate submission
        if (empty($_POST["name"]))
        {
           $_POST["name"] = $positions["name"];
        }
        if (empty($_POST["add1"]))
        {
           $_POST["add1"] = $positions["add1"];
        }
        if (empty($_POST["add2"]))
        {
           $_POST["add2"] = $positions["add2"];
        }
        if (empty($_POST["dist"]))
        {
           $_POST["dist"] = $positions["dist"];
        }
        if (empty($_POST["prov"]))
        {
           $_POST["prov"] = $positions["province"];
        }
        //mysql_query("UPDATE Persons SET Age = '36'
        //WHERE FirstName = 'Peter' AND LastName = 'Griffin'");
        $result = CS50::query("UPDATE restInfo SET Name = ?, Add1 = ?, Add2 = ?, Region = ?, Prov = ? WHERE id = ?", $_POST["name"], $_POST["add1"], $_POST["add2"], $_POST["dist"], $_POST["prov"], $_SESSION["id"]);
        // redirect to portfolio
        redirect("/");
        
    }

?>
