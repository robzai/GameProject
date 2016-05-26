<?php 
	session_start();
	$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT pwd FROM rank WHERE userName LIKE '$_POST[username]'";
	$result = mysqli_query($db,$sql);
	$num = mysqli_num_rows($result);
	if ($num <= 0) {
		header("location:signup.php");
	}
	while($row = mysqli_fetch_assoc($result)){
		foreach($row as $key=>$value){
			if (strcmp($value,$_POST['pwd']) == 0) {
				$_SESSION['username']=$_POST['username'];
				$_SESSION['pwd']=$_POST['pwd'];
			} else {
				echo "plz input correct username and password";
				header("location:login.php");
			}	
		}
	}

	/*$db = mysqli_connect("localhost", "root","root","score") or die(mysqli_connect_error());
	$sql = "SELECT pwd FROM rank WHERE userName LIKE '$_POST[username]'";
	$result = mysqli_query($db,$sql);
	while($row = mysqli_fetch_assoc($result)){
		foreach($row as $key=>$value){
			if (strcmp($value,$_POST['pwd']) == 0) {
				echo "welcome back" .$_POST['username'];
			} else {
				echo "0 results";
			}	
		}
	}*/
?>

<html>
<body>

<?php
//retrieve session data
echo "welcom:".$_SESSION['username'];
?>

</body>
</html>