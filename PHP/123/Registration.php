<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Student Information System</title>
    <link rel=stylesheet href="style.css">
    <script language="javascript" src="registration.js">
    </script>
</head>
<body>

<div style="background-color:Cornsilk;">

    <table style="width:100%; margin-top:0px;" border="1" >
	
		<form name="myForm" method="POST" action="print.php" onsubmit="return validateForm()">
		
        <tr>
            <td colspan="2">
                <img id="hd1" src="si1.png" width="980px" height="200px" style="border-radius:47%;"/>
            </td>
        </tr>
        <tr>
            <td style="width:50%;">
                <table style="width:100%;" border="0">
                    <tr>
                        <td style="font-size:20px; background-color:Tomato; text-align:center; font-family:Algerian;" colspan="2">Student Personal Information</td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Student Name:</td>                   
                        <td>
                            <input id="name" name="name" type="text"/></td>
                        </td></tr>
                    <tr>
                        <td style="text-align: right">
                            Registration Number :
                        </td>
                        <td>
                            <input id="regno" name="regno" type="text"/></td>
                        </td></tr>
                    <tr>
                        <td style="text-align: right">
                            Gender :
                        </td>
                        <td>
                            <input id="gender" name="gender" type="radio" value="male"/>Male
                            <input id="gender" name="gender" type="radio" value="female"/>Female
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: right">
                            Email :
                        </td>
                        <td>
                            <input id="email" name="email" type="text"/></td>
                        </td></tr>

                    <tr>
                        <td style="text-align: right">
                            Mobile Number :
                        </td>
                        <td>
                            <input id="mobile" name="mobile" type="text"/>
                        </td>
                    </tr>

                </table>
            </td>
            <td style="width:50%; vertical-align=top;">
                <table style="width:100%;" border="0">
                    <tr>
                        <td style="font-size:20px; text-align:center; font-family:Algerian;" colspan="2"></td>
                    </tr>
					
                    <tr>
                        <td style="font-size:20px; text-align:center; font-family:Algerian; background-color:Tomato;" colspan="2">Subject Marks Entry</td>

                    </tr>
                    <tr>
                        <td style="text-align:left" colspan="2">
							<table border="0" width="100%">
							<tr>
								<td style="text-align:right"> Web Design [Out of 50]</td>
								<td><input type="text" id="event1" name="WD" >
								</td>
							</tr>
                            <tr>
							<td style="text-align:right">OOP with JAVA [Out of 50]</td>
							<td><input type="text" id="event2" name="OOP"></td></tr>
							
							<tr>
                            <td style="text-align:right">Software Testing[Out of 50]</td>
							<td><input type="text" id="event3" name="ST" ></td>
							</tr>
							
							<tr>
                            <td style="text-align:right">Business Management[Out of 50]</td>
							<td><input type="text" id="event4" name="BM" ></td>
							</tr>
							</table>
                        </td>
                        

                    </tr>
                    <tr>
                        <td style="text-align: right">
                            Total Marks [Out of 200]:
                        </td>
                        <td>
                            <input id="m1" name="m1" type="text" onclick="marks()"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right">
                            Percentage :
                        </td>
                        <td>
                            <input id="per" name="per" type="text" onclick="percentage()"/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table style="width:100%;">
                    <tr>
                        <td style="font-size:22px; text-align:center; font-family:Algerian; background-color:Tomato;" colspan="2">INSTITUTE DETAILS</td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Institute Name :</td>
                        <td><select id="institute" name="institute">
                            <option value="none">Select the Institute</option>
							 <option value="rksoe">RKU_SOE</option>
							  <option value="rksom">RKU_SOM</option>
							  <option value="rksos">RKU_SOS</option>
							  <option value="rksop">RKU_SOP</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Select Branch :</td>
                        <td><input type="radio" id="ce" />Computer Engineering <input type="radio" id="ee"/>Electrical Engineering </td>
                    </tr>
                    <tr>
                        <td style="text-align: right">City :</td>
                        <td><input id="city" type="text"/></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Zipcode :</td>
                        <td><input id="zip" type="text"/></td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td style="text-align:CENTER" colspan="2">
			<input type="submit" id="Submit1" name="ok" onclick="display();" value="SUBMIT"/>
			 <input type="Reset" id="Reset1"  value="RESET"/>
			</td>
           
        </tr>
        

</form>
</table>
	
</div>
</body>
</html>
