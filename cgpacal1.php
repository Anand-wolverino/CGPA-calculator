//PHP Script which calculates CGPA from the values on the form created in indexcgpa.php file.
<?php 
$i=0;
$num=$denum=0;
$cgpa=0;
echo "<body >";
echo "<body 
	'font-style: normal;'
	'font-variant: normal;'
	'font-weight: bolder;'
	'font-size: xx large;'
	'text-align: center;'>";
	if($_GET["sc1"])
	{
		$credit= array($_GET['sc1'],$_GET['sc2'],$_GET['sc3'],$_GET['sc4'],$_GET['sc5'],$_GET['sc6'],$_GET['sc7'],$_GET['sc8']);
		$gradept= array($_GET['sg1'],$_GET['sg2'],$_GET['sg3'],$_GET['sg4'],$_GET['sg5'],$_GET['sg6'],$_GET['sg7'],$_GET['sg8']);
		for($i=0;$i<8;$i++)
		{
		
				$num=$num+($credit[$i]*$gradept[$i]);
				$denum=$denum+$credit[$i];
			
		}
		$cgpa=$num/$denum;
		echo "CGPA:$cgpa";
	}
    ?>
