


<form action="<?php $_SERVER['PHP_SELF']?>" method="post"> 
<select name="users"> 
<option value="">Select a person:</option> 


<?php  

$con = mysqli_connect("localhost","root","");
	   mysqli_select_db($con,"rku");
	   
		if($con){ 	echo ("connected <br>"); }
		else { echo mysqli_error();	}


		$sql="SELECT * FROM student"; 
		$result = mysqli_query($con,$sql);

	
	while($row = mysqli_fetch_array($result)) 
	{   
	?> 
	<option value="<?php echo $row['name'] ?>"> 
	<?php echo $row['name']?> 
	</option> 
	
<?php 
   } 
?> 
</select> 

<input type="submit" name="buttonsubmit" /> 
</form> 
 
 
 
 
<?php 
 
if(isset($_POST["buttonsubmit"])) 
	{	 
$result=mysqli_query($con,"select * from student where name='$_POST[users]'"); 
 	 
echo "<table border='1'> 
<tr> 
<th>ID</th> 
<th>NAME</th> 
<th>MOBILE</th> 
<th>ADDRESS</th> 
</tr>"; 
 
	 	while($row = mysqli_fetch_array($result)) 
	 	  { 	 
				echo "<tr>"; 
				echo "<td>" . $row['id'] . "</td>"; 
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['mobile'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "</tr>"; 
	 	  } 
			echo "</table>"; 
	} 
//mysql_close(); 
?> 
