<html>
	<body>
		<form  method='post' action=''>
			<input type='submit' value='add' name='btn_save'>
			</input>
		</form>
	</body>
</html>




<?php

	include_once 'connect.php';
		if(isset($_POST['btn_save']))
	{
		$qry = "insert into first values(1001,'AAAAA'),(1002,'BBBB'),(1003,'CCCC');";
		
		$result = mysqli_query($con,$qry);
		
		if($result)
		{
				echo 'Addedd';
		}
		else
		{
				echo mysqli_error();
		}
	
	
	}
?>




