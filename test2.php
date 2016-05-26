<?php
	session_start();
?>
<html>
<body>

<?php
	if($_POST['pwd'] != $_POST['repwd']) {
		echo "your passwords don't match";
		header("Location: signup.php");
	} else {
		$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
		$sql = "INSERT INTO rank VALUES ('$_POST[username]','$_POST[pwd]',0,0)";
		$result = mysqli_query($db,$sql);
		$_SESSION['username']=$_POST['username'];
		$_SESSION['pwd']=$_POST['pwd'];		
	}

	$row = mysqli_fetch_assoc($result);
	foreach($row as $key=>$value){
		echo $value;
		echo "<br/>";
	}
?>

</body>
</html>