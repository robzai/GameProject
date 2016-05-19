
<html>
	<head><meta charset="utf-8"></head>
	<body>
			<?php
			$con = @mysql_connect("localhost","root","root");
			if (!$con) {
				echo "fail";
			} else {
				echo "yeah";
			}
			mysql_select_db("score", $con);
			$sql="INSERT INTO rank
				VALUES ('$_POST[username]','$_POST[mark]')";

			if (!mysql_query($sql,$con)) {
				die('Error: ' . mysql_error());
			}
			
			$result = mysql_query("SELECT * FROM rank ORDER BY score")or  die(mysql_error());

			while($row = mysql_fetch_array($result))
	{
echo $row['userName'] . " " . $row['score'];
  echo "<br />";
  }
			?>
	</body>
</html>




