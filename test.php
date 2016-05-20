<html>
	<head><meta charset="utf-8">
	<script src="js/totalScore.js"></script>
	</head>
	<body>
		<form action="db.php" method="post">

			<table>
				<tr>
					<td>Enter your name</td>
					<td><input name="username" /></td>
				</tr>
				<tr>
					<td>Enter your score</td>
					<td><?php $score = getTotal();?></td>
				</tr>
				<tr>
					<td><input type="submit" /></td>
				</tr>
			</table>
		
		</form>
	</body>
</html>