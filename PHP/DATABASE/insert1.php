<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>"> 

Name   : <input type="text" name="tname" placeholder="enter name" required/><br> 

ID     : <input type="text" name="tid" placeholder="enter id" required/><br> 

Mobile : <input type="text" name="tmob" placeholder="enter mobile" required/><br> 

address: <textarea cols="12" rows="5" name="tadd" placeholder="enter address" ></textarea><br> 

<input type="submit" name="submits" value="Insert" > 
<input type="reset" value="Reset" > <br><br>

</form>



 
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<input type="submit" name="btn_print" value="Print" > <br><br>  

</form>


<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
Enter ID : <input type="text" name="btid" placeholder="Enter id for Delete" required/><br> 
<input type="submit" name="btn_delete" value="Delete">
</form>

<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
Enter ID : <input type="text" name="btid" placeholder="Enter id Update" required/><br> 
<input type="submit" name="btn_update" value="Update">
</form> 



  
 
<?php 


// DATABASE CONNECTION.....

$con = mysqli_connect("localhost","root","");
	
	   mysqli_select_db($con,"rku");
	
	
	
	if($con)
	{
		echo ("connected <br>");
		
	}
	else
	{
		echo mysqli_error();
		
		
		
		
	}

// INSERT QUERY...


if(isset($_POST["submits"])) 
{ 

$query= "insert into student(name,id,address,mobile) values 
('$_POST[tname]','$_POST[tid]','$_POST[tadd]','$_POST[tmob]')";


$result= mysqli_query($con,$query);
 	 
if($result) 
 	 	echo "data succesfully inserted."; else 
 	 	die("<br/>can't insert data"); 
}


// Print the data from table [ SELECT Query ]

else if(isset($_POST['btn_print']))
	{
		$sql = "SELECT id, name FROM student";
		
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
		// output data of each row
		
			while($row = mysqli_fetch_assoc($result)) 
			{
			echo "id:===   " . $row["id"]. " - Name:====    " . $row["name"]. "<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
	
	}


// Delete value from database 
	
	else if(isset($_POST['btn_delete']))
	{
		$id=$_POST['btid'];
		$sql = "DELETE FROM student WHERE id='$id'";
		
		$result = mysqli_query($con, $sql);
		
		if($result) 
 	 	echo "data succesfully deleted."; else 
 	 	die("<br/>can't delete data"); 

		
	
	}
	
// Update value from database

	else if(isset($_POST['btn_update']))
	{
		$id=$_POST['btid'];
		$sql= "UPDATE student SET name='Doe' WHERE id='$id'";
		
		$result = mysqli_query($con, $sql);
		
		if($result) 
 	 	echo "data succesfully Updated."; else 
 	 	die("<br/>can't update data"); 
	}
?> 
