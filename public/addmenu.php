<?php
    // configuration
    require("../includes/config.php"); 
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("addmenu_form.php", ["positions" => $_SESSION["positions"], "title" => "Edit Menu"]);
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
        if (empty($_POST["price"]))
        {
           $_POST["price"] = $positions["price"];
        }
        
        //mysql_query("UPDATE Persons SET Age = '36'
        //WHERE FirstName = 'Peter' AND LastName = 'Griffin'");
        $result = CS50::query("INSERT food SET name = ?, price = ?, restid = ?, picture= ? ", $_POST["name"], $_POST["price"], $_SESSION["id"], $_POST["picture"]);
        // redirect to portfolio
        redirect("/editmenu.php");
    }
?>
