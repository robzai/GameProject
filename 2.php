

<?php

$con = @mysql_connect("localhost","root","root");
if (!$con) {
	echo "fail";
} else {
	echo "yeah";
}
mysql_select_db("score", $con);

$result = mysql_query("SELECT * FROM rank ORDER BY score")or  die(mysql_error());

while($row = mysql_fetch_array($result))
  {
echo $row['userName'] . " " . $row['score'];
  echo "<br />";
  }


?>
