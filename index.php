<!Doctype html>
<html>
<head>
	<body>
		<form action ="" method="post">
		<?php
		if(isset($_POST["insert"]))
			{
				include 'postgressql.php';
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$age=$_POST["age"];
				$q="insert into student_info (firstname, lastname, age) values ('".$fname."','".$lname."','".$age."')";
				$sql = pg_query($q);
				if($sql)
				{
					echo("data inserted");
				}
					
			}
		?>
		
		<span>First Name : </span>
		<input type="text" name="fname" id="fname"></input>
		
		<span>Last Name : </span>
		<input type="text" name="lname" id="lname"></input>
		
		<span>age : </span>
		<input type="text" name="age" id="age"></input>
		
		<input type="submit" name="insert" id="insert" value="insert"></input>
		</form>
	</body>
</html>