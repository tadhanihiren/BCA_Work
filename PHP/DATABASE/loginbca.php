<html>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST"> 
Username : <input type="text" name="uname">
password : <input type="password" name="pwd">
<input type="submit" name="ok" value="Insert">
</form>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST"> 
<input type="submit" name="print" value="Display">
</form>



<?php
//Database Connection
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"login");
if($db)
{
	echo "Database Successfully";
}
else
{
	echo mysqli_error();
}

// insert 

if(isset($_POST['ok']))
{
	$q1="insert into student(username,password)values('$_POST[uname]','$_POST[pwd]')";
	$result=mysqli_query($con,$q1);
	if($result)
	{
		echo "Successfully inserted";
	}
	else 
	{
		die("<br>Not inserted");
	}
}

else if(isset($_POST['print']))
{
	$q1="select username,password from student";
	$result=mysqli_query($con,$q1);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "username" .$row["username"];
		}
	}
	else 
	{
		die("<br>Not inserted");
	}
}

else
	
	{ echo "no record "; }
	
	
?>
</body>
</html>