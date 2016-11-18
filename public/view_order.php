<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        $rows = CS50::query("SELECT * FROM restInfo WHERE id = 9");
        
        $result = CS50::query("SELECT * FROM orderinfo JOIN food ON orderinfo.food_id = food.id JOIN restInfo ON food.restid = restInfo.id  WHERE cust_id = ?", $_SESSION["id"]);
        render("view_order_form.php", ["positions" => $result ,"title" => "Order"]);
    }
?>