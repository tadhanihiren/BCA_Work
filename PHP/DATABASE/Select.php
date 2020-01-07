<html>
	<body>
		<form  method='post' action=''>
			<input type='submit' value='print' name='btn_print>
			</input>
		</form>
	</body>
</html>




<?php

	include_once 'connect.php';
	
	if(isset($_POST['btn_print']))
	{
		$sql = "SELECT id, name FROM user";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
		// output data of each row
		
			while($row = mysqli_fetch_assoc($result)) 
			{
			echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
	
	}
?>







mysqli_close($conn);