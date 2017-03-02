<?php
    // Implementation of viewing the menu control
    // configuration
    require("../includes/config.php"); 
    // else if user reached page via POST (as by submitting a form via POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $restid=$_POST["rest_id"];
        redirect("morder.php", ["result" => $_POST["rest_id"],"title" => "View menu"]);
    }
    
?>