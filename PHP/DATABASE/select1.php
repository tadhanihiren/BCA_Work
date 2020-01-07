<style type='text/css'> 

	td{color:white; font-size:15pt;} 
	th{color:yellow; font-size:15pt;}  

</style> 


<h3>This example shows fetching of data form student table.</h3> 
 
<?php 
 
$con = mysqli_connect("localhost","root","");
	
	mysqli_select_db($con,"rku");	
	
	if($con)
	{
		echo ("connected");		
	}
	else
	{
		echo mysqli_error();
	} 
 
 

$query=mysqli_query($con,"select * from student"); 
 
?> 
 
<table border=4 bgcolor='red'> 
 
<tr> 

<th>ID</th> 
<th></th>
<th>NAME</th> 
<th>ADDRESS</th> 
<th>MOBILE</th> 
<th>EDIT</th> 
<th>DELETE</th> </tr> 
 
<?php 
 
while($row=mysqli_fetch_array($query)) 
	{ 
		echo "<tr bgcolor='orange'>"; 

		echo "<td>".$row['id']."</td>"; 

		echo "<td><input type='checkbox'/></td>"; 

		echo "<td>".$row['name']."</td>"; 
		echo "<td>".$row['address']."</td>"; 
		echo "<td>".$row['mobile']."</td>"; 

		echo "<td><a href=''>Edit</a></td>"; 
		echo "<td><a href=''>Delete</a></td>"; 
		echo "<br/>"; 
	} 


	
 
echo "<tr><td colspan='7'><center> 
<input type='button' value='DELETE'/> 
<input type='button' value='CHECK ALL'/> 
<input type='button' value='UNCHECK ALL'/></center></td> 
</tr>"; 
 
echo "</table>"; 
//mysqli_close(); 
 
?> 

