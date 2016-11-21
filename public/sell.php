<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("sell_form.php", ["title" => "Sell"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (!empty($_POST["edit"]))
        {
         render("edit.php", ["foodid"=>$_POST["edit"]]);
        }
        else if(!empty($_POST["delet"]))
        {
          $result = CS50::query("DELETE from food WHERE id = ?",  $_POST["delet"]); 
           redirect("/sell.php");
        }
        else if (count($rows) != 1)
        {
            apologize("You don't have the stock -- The developer's fault:(.");
            //render("quote.php", $stock);
        }
        else
        {
            $shares = $rows[0]["shares"];
            CS50::query("DELETE FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
            CS50::query("UPDATE users SET CASH = CASH + ? WHERE id = ?", $stock["price"]*$shares, $_SESSION["id"]);
            CS50::query("INSERT INTO transaction (user_id, transaction, time, symbol, shares, price) VALUES(?,?,now(),?,?,?)", $_SESSION["id"], "SELL", $stock["symbol"],$shares,$stock["price"]);
        }
       
    }
    

?>
