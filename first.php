<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>

	<style>
		
		.php1{
			background-color: black;
			color: white;
			padding: 15px 15px 15px 15px;
			display: inline-block;
			text-align: center;
		}

	</style>

</head>
<body>
	
	<div class = "php1">

		<?php echo $_POST["text1"];?> 
			<br>
		<?php echo $_POST["text2"];?>
			<br>
		<?php echo $_POST["text3"];?>
			<br>
		<?php echo $_POST["email"];?>
			<br>
		<?php echo $_POST["comment"];?>
			<br>

	</div>

</body>
</html>