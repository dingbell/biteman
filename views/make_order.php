<html>
<body>
<p>
Hi ，
your order has been placed.
Your order number is <?= date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8)?>
  <?php
  date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
  ?>
</p> 
</body>
</html>