<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Example Form Usage</title>
	</head>
	<body>

		<h1>Example Form Usage</h1>

		<!--	Point the form to the location of your post redirection file	-->
		<form action="index.php" method="post">
			Input: <input type="text" name="input1" /><br />
			Input: <input type="text" name="input2" /><br />
			Input: <input type="text" name="input3" /><br />
			
			<!--	Define where you want the form to eventually go	-->
			<input type="hidden" name="destination" value="http://google.com" />
			
			<input type="submit" value="Register">
			</form>
			
			<a href="test.php">Test Link</a>
	
	</body>
</html>