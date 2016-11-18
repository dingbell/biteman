<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('数据库连接失败: ' . mysql_error());

  }

  else

  {

  mysql_query("SET NAMES UTF8");

  mysql_query("set character_set_client=utf8"); 

  mysql_query("set character_set_results=utf8");

  mysql_select_db("demosql", $con);

  $result = mysql_query("SELECT * FROM teacher");

  //在表格中输出显示结果

  echo "<table border='1'>

<tr>

<th>id</th>

<th>name</th>

</tr>";

  while($row = mysql_fetch_array($result))

  {

 echo "<tr>";

 echo "<td>" . $row['id'] . "</td>";

 echo "<td>" . $row['name'] . "</td>";

 echo "</tr>";

  }

  echo "</table>";

}

mysql_close($con);

?>
