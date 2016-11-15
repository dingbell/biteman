<?php

    // configuration
    require("../includes/config.php"); 
    
    // define $posiitons, the informtion for protfolio
   // $id =  CS50::query("SELECT id from users WHERE username = ?", $_SESSION["id"]);
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
    /**
    $cashRows = CS50::query("SELECT cash FROM users where id = ?", $_SESSION["id"]);
    if (count($cashRows) != 0){
        $cash = $cashRows[0]["cash"];
        $positions[] = [
            "symbol" => "CASH",
            "total" => $cash,
            "name" => "",
            "price" => "",
            "shares" => ""
        ];    
    }
    **/
    // render portfolio
    render("portfolio.php",["positions" => $positions, "title" => "Portfolio"]);
?>
