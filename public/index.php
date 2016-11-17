<?php

    // configuration
    require("../includes/config.php"); 
    
    // define $posiitons, the informtion for protfolio
   // $id =  CS50::query("SELECT id from users WHERE username = ?", $_SESSION["id"]);
    if ($_SESSION["userType"] == "rest")
    {
        $rows = CS50::query("SELECT * FROM restInfo WHERE id = ?", $_SESSION["id"]);
        //$rows = CS50::query("SELECT * FROM restInfo WHERE id = 9");
        $positions = [];
        $restInfo = $rows[0];
        if ($restInfo !== false)
        {
            $positions[] = [
                "name" => $restInfo["Name"],
                "add1" => $restInfo["Add1"],
                "add2" => $restInfo["Add2"],
                "dist" => $restInfo["Region"],
                "province" => $restInfo["Prov"] 
            ];
            
        }
    }
    
    if ($_SESSION["userType"] == "cust")
    {
        $rows = CS50::query("SELECT * FROM custInfo WHERE id = ?", $_SESSION["id"]);
        //$rows = CS50::query("SELECT * FROM restInfo WHERE id = 9");
        $positions = [];
        $restInfo = $rows[0];
        if ($restInfo !== false)
        {
            $positions[] = [
                "name" => $restInfo["Name"],
                "phone" => $restInfo["phone"] 
            ];
        }
    }
    
    $_SESSION["positions"] = $positions;
    // render portfolio
    if ($_SESSION["userType"] == "rest")
    {
        render("portfolio_rest.php",["positions" => $positions, "title" => "Portfolio"]);
    }
    else
    {
        // To do
        render("portfolio_cust.php",["positions" => $positions, "title" => "Portfolio"]);
    }
?>
