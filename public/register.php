<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if(empty($_POST["username"])||empty($_POST["password"])||empty($_POST["confirmation"]))
        {
            apologize("Please input a valid username and password.");
        }
        else if(strcmp($_POST["password"], $_POST["confirmation"]) !== 0)
        {
            apologize("The password is not the same as the confirmaiton.");
        }
        else if (empty($_POST["cus-type"]))
        {
            apologize("You must select your user-type.");
        }
        else
        {
            if ($_POST["cus-type"] == "customer"){
                $cusType = "cust";
                $result = CS50::query("INSERT IGNORE INTO cust (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            }
            else
            {
                $cusType = "rest";
                $result = CS50::query("INSERT IGNORE INTO rest (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            }
            //$result = CS50::query("INSERT IGNORE INTO ? (username, hash) VALUES(?, ?)", $cusType, $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            //$result = CS50::query("INSERT IGNORE INTO rest (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            
            if($result != false) 
            {
                $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $id;
                $_SESSION["cusType"]= $cusType;
                // redirect to portfolio
                redirect("/");
            }
            else
            {
                apologize("The user name has already been used.");
            }
        }
    }
    

?>