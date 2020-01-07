<?php

//connection with mysql

	$con=mysqli_connect("localhost","root","");

	if($con)
	{
		echo "Connected Successfully<br>";
	}
	else
	{
		echo mysqli_error();
	}

	$db1=mysqli_select_db($con,"School");

	if($db1)
	{
		echo "Database connected";
	}
	else
	{
		echo mysqli_error();
	}

?>
<html>
<body>

<form method="post" action="">
	<input type="submit" value="INSERT" name="insert">
</form>

<form method="post" action="">
	<input type="submit" value="PRINT" name="print">
</form>

<form method="post" action="">
	Enter id : <input type="text" name="id1" placeholder="Enter id for Delete" required><br>
	<input type="submit" value="DELETE" name="delete">
</form>

<form method="post" action="">
	Enter id : <input type="text" name="id1" placeholder="Enter id for Update" required><br>
	<input type="submit" value="UPDATE" name="update">
</form>

</body>
</html>

<?php

	
	
	if(isset($_POST['insert']))
	{
		$q1="insert into Student values('C002','Kajal',18),('C003','Bhoomi',18);";
		
		$result=mysqli_query($con,$q1);
		
		if($result)
		{
			echo "Inserted......";
		}
		else
		{
			mysqli_error();
		}
	}

	if(isset($_POST['print']))
	{
		$q2="select id,name,age from Student;";
		
		$r1=mysqli_query($con,$q2);
		
		if(mysqli_num_rows($r1)>0)
		{
			while($row=mysqli_fetch_array($r1))
			{
				echo " ID : ".$row['id']."--- NAME : ".$row['name']."--- AGE : ".$row['age']."<br>";
			}
		}
		else
		{
			echo "No records inside";
		}
	}
	
	if(isset($_POST['delete']))
	{
		$id=$_POST['id1'];
		
		$q3="DELETE from Student WHERE id='$id'";
		
		$r2=mysqli_query($con,$q3);
		
		if($r2)
		{
			echo "Data Successfully deleted<br>";
		}
		else
		{
			echo ("Can't delete the data<br>");
		}
	}
	
	if(isset($_POST['update']))
	{
		$id1=$_POST['id1'];
		
		$q4="UPDATE Student SET name='Name'
		WHERE id='$id1'";
		
		$r2=mysqli_query($con,$q4);
		
		if($r2)
		{
			echo "Data Successfully updated<br>";
		}
		else
		{
			echo ("Can't update the data<br>");
		}
	}
	
?>
