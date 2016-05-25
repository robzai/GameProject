<?php	
	session_start();
	if(db.collection.find({"player":{$_POST["username"]}},{"password":{$_POST["pwd"]}})) {
		$_SESSION['user_info'] = array()  //将用户的信息存入，或者存入你需要的东西
	} else {
		die('用户名密码错误之类的提示');
	}
?>