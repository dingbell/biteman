<?php
 require("../includes/config.php"); 
if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("view_menu_form_cust.php", ["result" => $_SESSION["restid"],"title" => "View menu"]);
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {       $barcode=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
            $result=CS50::query("INSERT orderInfo SET cust_id = ?, quantity = ?, food_id= ? ,barcode=?", $_SESSION["id"], $_POST[$_POST["morder"]], $_POST["morder"],$barcode);
            render("make_order.php",["barcode" => $barcode,"title" => "Order"]);
    }
?>