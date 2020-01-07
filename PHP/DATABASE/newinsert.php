<html>
<body>



<form action='' method="post">
<input type="submit" name="submits" value="add"/>
</form>







<?php

include 'new.php';

	
	if(isset($_POST['submits']))
	{
	
	$q1 = "insert into first values(101,'ABC'),(102,'CDE'),(103,'XYZ');";
	
	$res=mysqli_query($con,$q1);
	
	if($res)
	{
		echo "added";
	}
	else
	{
		echo mysqli_error();
	}

	}

?>
</body>
</html>