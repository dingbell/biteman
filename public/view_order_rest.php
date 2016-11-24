<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        $result = CS50::query("SELECT * FROM orderInfo JOIN food ON orderInfo.food_id = food.id JOIN restInfo ON food.restid = restInfo.id  WHERE restInfo.id = ?", $_SESSION["id"]);
        render("view_order_rest_form.php", ["positions" => $result ,"title" => "Order"]);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // else render form
        if (!empty($_POST["confirm"]))
        {
            CS50::query("UPDATE orderInfo SET status = 1 where order_id = ?", $_POST["confirm"]);
        }
        else
        {
            CS50::query("UPDATE orderInfo SET status = 0 where order_id = ?", $_POST["cancel"]);
        }
        $result = CS50::query("SELECT * FROM orderInfo JOIN food ON orderInfo.food_id = food.id JOIN restInfo ON food.restid = restInfo.id  WHERE restInfo.id = ?", $_SESSION["id"]);
        render("view_order_rest_form.php", ["positions" => $result ,"title" => "Order"]);
    }
?>