
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="Zexot.css">
</head>
<body style="color:white;">
    <div style="overflow: hidden;height: 0px;">
        <?php
            $x=0;
            $y=0;
        if (isset($_POST['ans0'])) {
            $key = array("Field","Operating System","Animation/movie file","Flash","World Wide Web","Arithmetic logic unit, Control unit","Temporary file","Mother Board","Multiprocessor","Uniform Resource Locator","Binary","HHL","low-level programming language","Print Server","Ericson" );
            $ans = array($_POST['ans0'],$_POST['ans1'],$_POST['ans2'],$_POST['ans3'],$_POST['ans4'],$_POST['ans5'],$_POST['ans6'],$_POST['ans7'],$_POST['ans8'],$_POST['ans9'],$_POST['ans10'],$_POST['ans11'],$_POST['ans12'],$_POST['ans13'],$_POST['ans14']);
            for ($i=0; $i <= 14; $i++) { 
                if (isset($ans[$i])) 
                {
                    if ($ans[$i]==$key[$i]) 
                    {
                        $x++;
                        $dis[$i]="True";
                    }
                    else
                    {
                        $y++;
                        $dis[$i]="False : "."<font color='#0000ff'>Ans is $key[$i]</font>";
                    }
                }
                else
                {
                    $dis[$i] = "Not Attmpte";
                }
        }
        }
        else{
            $dis[0]=$dis[1]=$dis[2]=$dis[3]=$dis[4]=$dis[5]=$dis[6]=$dis[7]=$dis[8]=$dis[9]=$dis[10]=$dis[11]=$dis[12]=$dis[13]=$dis[14]="";
        }
        ?>
    </div>
<form method="POST" action="" name="myform">
	<div class="grid">
        <div style="margin: 50px;"></div>
        <h1>Question 1</h1>
        <div class="inergrid">
        <p class="question">What is part of a database that holds only one type of information?</p>
        <input type="radio"  name="ans0" value="Report" id="a1"> 
		<input type="button" onclick="getElementById('a1').click()" class="btn" value="Report">
        <input type="radio"  name="ans0" value="Field" id="a2">
        <input type="button" onclick="getElementById('a2').click()" class="btn" value="Field">
        <input type="radio"  name="ans0" value="Record" id="a3">
        <input type="button" onclick="getElementById('a3').click()" class="btn" value="Record">
        <input type="radio"  name="ans0" value="File" id="a4">
        <input type="button" onclick="getElementById('a4').click()" class="btn" value="File">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[0]</font></div>"; ?>
        </div>	            


	    <h1>Question 2</h1>
    	<div class="inergrid">
  		<p class="question">'OS' computer abbreviation usually means ?</p>
        <input type="radio"  name="ans1" value="Order of Significance" id="b1"> 
		<input type="button" onclick="getElementById('b1').click()" class="btn" value="Order of Significance">
        <input type="radio"  name="ans1" value="Open Software" id="b2">
        <input type="button" onclick="getElementById('b2').click()" class="btn" value="Open Software">
        <input type="radio"  name="ans1" value="Operating System" id="b3">
        <input type="button" onclick="getElementById('b3').click()" class="btn" value="Operating System">
        <input type="radio"  name="ans1" value="Optical Sensor" id="b4">
        <input type="button" onclick="getElementById('b4').click()" class="btn" value="Optical Sensor">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[1]</font></div>"; ?>
        </div>	            


        <h1>Question 3</h1>
        <div class="inergrid">
        <p class="question">'.MOV' extension refers usually to what kind of file?</p>
        <input type="radio"  name="ans2" value="Image file" id="c1"> 
		<input type="button" onclick="getElementById('c1').click()" class="btn" value="Image file">
        <input type="radio"  name="ans2" value="Animation/movie file" id="c2">
        <input type="button" onclick="getElementById('c2').click()" class="btn" value="Animation/movie file">
        <input type="radio"  name="ans2" value="Audio file" id="c3">
        <input type="button" onclick="getElementById('c3').click()" class="btn" value="Audio file">
        <input type="radio"  name="ans2" value="MS Office document" id="c4">
        <input type="button" onclick="getElementById('c4').click()" class="btn" value="MS Office document">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[2]</font></div>"; ?>
        </div>	            


        <h1>Question 4</h1>
        <div class="inergrid">
        <p class="question">Which is a type of Electrically-Erasable Programmable Read-Only Memory?</p>
        <input type="radio"  name="ans3" value="Flash" id="d1">
		<input type="button" onclick="getElementById('d1').click()" class="btn" value="Flash">
        <input type="radio"  name="ans3" value="Flange" id="d2">
        <input type="button" onclick="getElementById('d2').click()" class="btn" value="Flange">
        <input type="radio"  name="ans3" value="Fury" id="d3">
        <input type="button" onclick="getElementById('d3').click()" class="btn" value="Fury">
        <input type="radio"  name="ans3" value="FRAM" id="d4">
        <input type="button" onclick="getElementById('d4').click()" class="btn" value="FRAM">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[3]</font></div>"; ?>
        </div>	            


        <h1>Question 5</h1>
        <div class="inergrid">
        <p class="question">WWW stands for ?</p>
        <input type="radio"  name="ans4" value="World Whole Web" id="e1"> 
		<input type="button" onclick="getElementById('e1').click()" class="btn" value="World Whole Web">
        <input type="radio"  name="ans4" value="Wide World Web" id="e2">
        <input type="button" onclick="getElementById('e2').click()" class="btn" value="Wide World Web">
        <input type="radio"  name="ans4" value="Web World Wide" id="e3">
        <input type="button" onclick="getElementById('e3').click()" class="btn" value="Web World Wide">
        <input type="radio"  name="ans4" value="World Wide Web" id="e4">
        <input type="button" onclick="getElementById('e4').click()" class="btn" value="World Wide Web">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[4]</font></div>"; ?>
        </div>	            


        <h1>Question 6</h1>
        <div class="inergrid">
        <p class="question">Which of the following are components of Central Processing Unit (CPU) ?</p>
        <input type="radio"  name="ans5" id="f1" value="Arithmetic logic unit, Mouse"> 
		<input type="button" onclick="getElementById('f1').click()" class="btn" value="Arithmetic logic unit, Mouse">
        <input type="radio"  name="ans5" id="f2" value="Arithmetic logic unit, Control unit">
        <input type="button" onclick="getElementById('f2').click()" class="btn" value="Arithmetic logic unit, Control unit">
        <input type="radio"  name="ans5" id="f3" value="Arithmetic logic unit, Integrated Circuits">
        <input type="button" onclick="getElementById('f3').click()" class="btn" value="Arithmetic logic unit, Integrated Circuits">
        <input type="radio"  name="ans5" id="f4" value="Control Unit, Monitor">
        <input type="button" onclick="getElementById('f4').click()" class="btn" value="Control Unit, Monitor">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[5]</font></div>"; ?>
        </div>	            


        <h1>Question 7</h1>
        <div class="inergrid">
        <p class="question">'.TMP' extension refers usually to what kind of file?</p>
        <input type="radio"  name="ans6" id="g1" value="Compressed Archive file"> 
		<input type="button" onclick="getElementById('g1').click()" class="btn" value="Compressed Archive file">
        <input type="radio"  name="ans6" id="g2" value="Image file">
        <input type="button" onclick="getElementById('g2').click()" class="btn" value="Image file">
        <input type="radio"  name="ans6" id="g3" value="Temporary file">
        <input type="button" onclick="getElementById('g3').click()" class="btn" value="Temporary file">
        <input type="radio"  name="ans6" id="g4" value="Audio file">
        <input type="button" onclick="getElementById('g4').click()" class="btn" value="Audio file">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[6]</font></div>"; ?>
        </div>	            


        <h1>Question 8</h1>
        <div class="inergrid">
        <p class="question">Where is RAM located ?</p>
        <input type="radio"  name="ans7" id="h1" value="Expansion Board"> 
		<input type="button" onclick="getElementById('h1').click()" class="btn" value="Expansion Board">
        <input type="radio"  name="ans7" id="h2" value="External Drive">
        <input type="button" onclick="getElementById('h2').click()" class="btn" value="External Drive">
        <input type="radio"  name="ans7" id="h3" value="Mother Board">
        <input type="button" onclick="getElementById('h3').click()" class="btn" value="Mother Board">
        <input type="radio"  name="ans7" id="h4" value="All of above">
        <input type="button" onclick="getElementById('h4').click()" class="btn" value="All of above">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[7]</font></div>"; ?>
        </div>	            


        <h1>Question 9</h1>
        <div class="inergrid">
        <p class="question">If a computer has more than one processor then it is known as ?</p>
        <input type="radio"  name="ans8" id="k1" value="Uniprocess"> 
		<input type="button" onclick="getElementById('k1').click()" class="btn" value="Uniprocess">
        <input type="radio"  name="ans8" id="k2" value="Multiprocessor">
        <input type="button" onclick="getElementById('k2').click()" class="btn" value="Multiprocessor">
        <input type="radio"  name="ans8" id="k3" value="Multithreaded">
        <input type="button" onclick="getElementById('k3').click()" class="btn" value="Multithreaded">
        <input type="radio"  name="ans8" id="k4" value="Multiprogramming">
        <input type="button" onclick="getElementById('k4').click()" class="btn" value="Multiprogramming">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[8]</font></div>"; ?>
        </div>	            


        <h1>Question 10</h1>
        <div class="inergrid">
        <p class="question">Full form of URL is ?</p>
        <input type="radio"  name="ans9" id="l1" value="Uniform Resource Locator">
		<input type="button" onclick="getElementById('l1').click()" class="btn" value="Uniform Resource Locator">
        <input type="radio"  name="ans9" id="l2" value="Uniform Resource Link">
        <input type="button" onclick="getElementById('l2').click()" class="btn" value="Uniform Resource Link">
        <input type="radio"  name="ans9" id="l3" value="Uniform Registered Link">
        <input type="button" onclick="getElementById('l3').click()" class="btn" value="Uniform Registered Link">
        <input type="radio"  name="ans9" id="l4" value="Unified Resource Link">
        <input type="button" onclick="getElementById('l4').click()" class="btn" value="Unified Resource Link">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[9]</font></div>"; ?>
        </div>	            


        <h1>Question 11</h1>
        <div class="inergrid">
        <p class="question"> In which of the following form, data is stored in computer ?</p>
        <input type="radio"  name="ans10" id="m1" value="Decimal"> 
		<input type="button" onclick="getElementById('m1').click()" class="btn" value="Decimal">
        <input type="radio"  name="ans10" id="m2" value="Binary">
        <input type="button" onclick="getElementById('m2').click()" class="btn" value="Binary">
        <input type="radio"  name="ans10" id="m3" value="Octal">
        <input type="button" onclick="getElementById('m3').click()" class="btn" value="Octal">
        <input type="radio"  name="ans10" id="m4" value="HexaDecimal">
        <input type="button" onclick="getElementById('m4').click()" class="btn" value="HexaDecimal">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[10]</font></div>"; ?>
        </div>	            


        <h1>Question 12</h1>
        <div class="inergrid">
        <p class="question"> Technology used to provide internet by transmitting data over wires of telephone network is ?</p>
        <input type="radio"  name="ans11" id="n1" value="Transmitter"> 
		<input type="button" onclick="getElementById('n1').click()" class="btn" value="Transmitter">
        <input type="radio"  name="ans11" id="n2" value="Diodes">
        <input type="button" onclick="getElementById('n2').click()" class="btn" value="Diodes">
        <input type="radio"  name="ans11" id="n3" value="HHL">
        <input type="button" onclick="getElementById('n3').click()" class="btn" value="HHL">
        <input type="radio"  name="ans11" id="n4" value="DSL">
        <input type="button" onclick="getElementById('n4').click()" class="btn" value="DSL">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[11]</font></div>"; ?>
        </div>	            


        <h1>Question 13</h1>
        <div class="inergrid">
        <p class="question">Which level language is Assembly Language ?</p>
        <input type="radio"  name="ans12" id="o1" value="high-level programming language"> 
		<input type="button" onclick="getElementById('o1').click()" class="btn" value="high-level programming language">
        <input type="radio"  name="ans12" id="o2" value="medium-level programming language">
        <input type="button" onclick="getElementById('o2').click()" class="btn" value="medium-level programming language">
        <input type="radio"  name="ans12" id="o3" value="low-level programming language">
        <input type="button" onclick="getElementById('o3').click()" class="btn" value="low-level programming language">
        <input type="radio"  name="ans12" id="o4" value="machine language">
        <input type="button" onclick="getElementById('o4').click()" class="btn" value="machine language">
        <?php echo "<div class='ansgrid'><font color='red'>$dis[12]</font></div>"; ?>
        </div>	            


        <h1>Question 14</h1>
        <div class="inergrid">
	        <p class="question">Documents, Movies, Images and Photographs etc are stored at a ?</p>
	        <input type="radio"  name="ans13" id="p1" value="Application Sever"> 
			<input type="button" onclick="getElementById('p1').click()" class="btn" value="Application Sever">
	        <input type="radio"  name="ans13" id="p2" value="Web Sever">
	        <input type="button" onclick="getElementById('p2').click()" class="btn" value="Web Sever">
	        <input type="radio"  name="ans13" id="p3" value="Print Server">
	        <input type="button" onclick="getElementById('p3').click()" class="btn" value="Print Server">
	        <input type="radio"  name="ans13" id="p4" value="File Server">
	        <input type="button" onclick="getElementById('p4').click()" class="btn" value="File Server">
        	<?php echo "<div class='ansgrid'><font color='red'>$dis[13]</font></div>"; ?>
        </div>	            


        <h1>Question 15</h1>
        <div class="inergrid">
	        <p class="question">Who was the Founder of Bluetooth ?</p>
	        <input type="radio"  name="ans14" id="q1" value="Ericson">
			<input type="button" onclick="getElementById('q1').click()" class="btn" value="Ericson">
	        <input type="radio"  name="ans14" id="q2" value="Martin Cooper">
	        <input type="button" onclick="getElementById('q2').click()" class="btn" value="Martin Cooper">
	        <input type="radio"  name="ans14" id="q3" value="Wely Row">
	        <input type="button" onclick="getElementById('q3').click()" class="btn" value="Wely Row">
	        <input type="radio"  name="ans14" id="q4" value="Emma Watson">
	        <input type="button" onclick="getElementById('q4').click()" class="btn" value="Emma Watson">
        	<?php echo "<div class='ansgrid'><font color='red'>$dis[14]</font></div>"; ?>
        </div>          
		<input type="submit" name="submit" value="submit" id="submit">
        <div class='ansgrid' style="color:white; width:300px;">
        <?php
        $a=$x+$y;
        $b=15-$a;
        if($x>0 && $x<5){echo $x." Ans is True<br>";echo "<font color='red'>Beter luck next time</font><br>";} 
        if($x>=5 && $x<10){echo "$x Ans is True<br>";echo "<font color='yellow'>Very Good</font><br>";}
        if($x>=10 && $x<15){echo "$x Ans is <br>";echo "<font color='#00ff00'>Exclant</font><br>";}
        if ($y>=1) {
        echo"$y Ans Is False<br>";
        }
        if ($a>=1) {
        echo"$a Ans ia Attmpte<br>";
        }
        if ($b>=0 && $b<15) {
        echo"$b Ans Not Attmpte<br>"; 
        }
        ?>
        </div>
    </div>
        
</from>
</body>
</htm>
