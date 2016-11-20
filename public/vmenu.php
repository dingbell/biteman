<?php
    // Implementation of viewing the menu control

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("vmenu_form.php", ["title" => "Vmenu"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (!empty($_POST["edit"]))
        {
            $_SESSION["foodid"]=$_POST["edit"];
            render("edit_form.php",["foodid"=>$_POST["edit"]]);
        }
        else if(!empty($_POST["delete"]))
        {
            $result = CS50::query("DELETE from food WHERE foodid = ?", $_POST["delete"]);
            redirect("/vmenu.php");
        }
        else if(!empty($_POST["add"]))
        {
            redirect("/sell.php");
        }
      
    }
        


?>
