<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("make_order_form.php", ["title" => "Make order"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["symbol"]))
        {
            
            apologize("You must provide the symbol.");
        }
        if (preg_match("/^\d+$/", $_POST["shares"])!= TRUE)
        {
            apologize("You must provide the a vailid whole shareds of stocks.");
        }
        else
        {
            $stock = lookup($_POST["symbol"]);
            $price = $stock["price"];
            if($stock === false)
            {
                apologize("Please provide a valid symbol.");
            }
            else
            {
                $cash = CS50::query("SELECT cash from users where id = ?", $_SESSION["id"]);
                $debt = $price * $_POST["shares"];
                if ($debt > $cash[0]["cash"])
                {
                    apologize("You don't have enough cash.");
                }
                else
                {
                    CS50::query("INSERT INTO portfolios (user_id, symbol, shares) VALUES(?, upper(?), ?) ON DUPLICATE KEY UPDATE shares = shares + ?",$_SESSION["id"],$stock["symbol"],$_POST["shares"],$_POST["shares"]);
                    CS50::query("UPDATE users SET cash = cash - ? WHERE id = ?", $debt, $_SESSION["id"]);
                    CS50::query("INSERT INTO transaction (user_id, transaction, time, symbol, shares, price) VALUES(?,?,now(),?,?,?)", $_SESSION["id"], "BUY", $stock["symbol"],$_POST["shares"],$stock["price"]);
                    redirect("/");
                }
            }
        }
        
    }

?>
