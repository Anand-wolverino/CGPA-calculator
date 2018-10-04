<html>
<style type="text/css">

body {
	background-repeat: repeat-x;
	background-color: #F4F4F9;
	float: none;
	opacity: 0.96;
	color: #0A0000;
	text-align: center;
	text-indent: 0px;
	border: thin double #0F55FB;
	text-shadow: 0px 0px #639BF1;
	
font-style: normal;
	font-weight: bolder;
}
.note {
	background-color: #25204B;
	color: #ECE7E7;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-variant: normal;
	font-weight: bolder;
	font-size: medium;
	text-align: center;
	border-width: thin;
	border-style: groove;
}
	h1
	{
	background-color: #25204B;
	color: #EFE7E8;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-weight: bolder;
	font-size: x-large;
}
</style>
<body>


<h1 align="center"> <br>CGPA CALCULATOR <br></h1>
<form action="cgpacal1.php" method="GET">
	SEM1 CREDIT:<input type=" int" name="sc1"/>
	SEM1 GPA:<input type="int" name="sg1"/><br><br>
	SEM2 CREDIT:<input type=" int" name="sc2"/>
	SEM2 GPA:<input type="int" name="sg2"/><br><br>
	SEM3 CREDIT:<input type="int" name="sc3"/>
	SEM3 GPA:<input type=" int" name="sg3"/><br><br>
	SEM4 CREDIT:<input type=" int" name="sc4"/>
	SEM4 GPA:<input type="int" name="sg4"/><br><br>
	SEM5 CREDIT:<input type=" int" name="sc5"/>
	SEM5 GPA:<input type="int" name="sg5"/><br><br>
	SEM6 CREDIT:<input type=" int" name="sc6"/>
	SEM6 GPA:<input type="int" name="sg6"/><br><br>
	SEM7 CREDIT:<input type=" int" name="sc7"/>
	SEM7 GPA:<input type="int" name="sg7"/><br><br>
	SEM8 CREDIT:<input type=" int" name="sc8"/>
	SEM8 GPA:<input type="int" name="sg8"/><br><br>
  <input type="submit"/>
  <br>
  <br>
  <br>
<div class="note">
  <p>
  NOTE:
  <ul><li>Please enter the sem credits for each sem ,if the number of sem is less than 08 then enter 0 for those semesters</li>
  <li> Enter the grade points for each semesters ,if the number of semesters is less than the above specified values enter 0</li>
  </ul>  
  <a href="wppage.html">TO RETURN HOME CLICK HERE!! !</a><br><br>
  <a href="indexcgpa.php">  FOR GPA CALCULATOR CLICK HERE!!</a> 
  </p>
  <br>
</div>
</form>
</body>
</html>