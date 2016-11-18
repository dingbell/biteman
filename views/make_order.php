<html>
<body>

Hi <?php echo $_GET["name"]; ?><br>
Your order has been placed.
Your order number is <?php function build_order_no()
    {
        return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }; ?>
 
</body>
</html>