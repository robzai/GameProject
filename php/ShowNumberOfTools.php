<?php
	$sql = "SELECT numberoftools FROM rank WHERE userName = '$_SESSION[username]'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$num = $row.["numberoftools"];
?>